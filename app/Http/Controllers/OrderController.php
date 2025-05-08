<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Restaurant;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function userOrders(Request $request)
    {
        $query = Order::where('user_id', Auth::id());

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $orders = $query->latest()->paginate(10);

        return view('front.buyer.orders', compact('orders'));
    }


    public function restaurantOrders(Request $request)
    {
        $query = Auth::user()->restaurant->orders();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        } else {
            $query->orderByRaw("CASE
                WHEN status = 'Processing' THEN 1
                WHEN status = 'Completed' THEN 2
                WHEN status = 'Cancelled' THEN 3
                ELSE 4 END");
        }
        $orders = $query->paginate(10);

        return view('front.restaurant.orders', compact('orders'));
    }

    public function restaurantOrder()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(10);
        return view('front.buyer.orders', compact('orders'));
    }

    public function create()
    {
        $cart = $this->cartService->getCart();
        $totalPrice = $this->cartService->getTotalPrice();
        return view('front.buyer.checkout', compact('cart', 'totalPrice'));
    }

    public function checkout(Request $request)
    {
        $cart = session('cart');

        if (empty($cart)) {
            return redirect()->route('front.index')->with('error', 'Your cart is empty.');
        }

        $request->validate([
            'address' => 'required|string',
            'commune' => 'required|string',
            'wilaya' => 'required|string',
            'order_type' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        foreach ($cart as $restaurantId => $dishes) {
            $restaurant = Restaurant::findOrFail($restaurantId);

            if ($restaurant->is_verified == 0) {
                return back()->with('error', 'Restaurant ' . $restaurant->name .' is not verified.');
            }

            if($restaurant->accepts_orders == 0){
                return back()->with('error', 'Restaurant ' . $restaurant->name .' is not accepting orders at the moment.');
            }

            $order = Order::create([
                'user_id' => Auth::user()->id,
                'restaurant_id' => $restaurant->id,
                'order_date' => now(),
                'total' => 0,
                'address' => $request->address,
                'commune' => $request->commune,
                'wilaya' => $request->wilaya,
                'order_type' => $request->order_type,
                'payment_method' => $request->payment_method,
                'payment_status' => 'Pending',
                'payment_date' => now(),
            ]);

            $totalPrice = 0;

            foreach ($dishes as $dishData) {
                OrderLine::create([
                    'order_id' => $order->id,
                    'dish_id' => $dishData['dish_id'],
                    'quantity' => $dishData['quantity'],
                ]);

                $totalPrice += $dishData['price'] * $dishData['quantity'];
            }

            $order->update([
                'total' => $totalPrice,
            ]);
        }

        session()->forget('cart');

        return redirect()->route('front.index')->with('success', 'Order placed successfully!');
    }

    public function receipt(Order $order)
    {
        $order->load('user', 'orderLines.dish', 'restaurant');

        $user = Auth::user();

        if (!$user) {
            abort(404, 'Unauthorized');
        }

        if ($user->id !== $order->user_id && $user->id !== $order->restaurant->user_id) {
            abort(404, 'Unauthorized');
        }

        return view('front.receipt', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:Processing,Cancelled,Completed',
        ]);

        if ($order->restaurant->user_id !== Auth::user()->id) {
            return back()->with('error', 'You are not authorized to update this order.');
        }

        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Order status updated successfully.');
    }

    public function cancelUserOrder(Order $order)
    {
        if ($order->user_id !== Auth::user()->id) {
            return back()->with('error', 'You are not authorized to cancel this order.');
        }

        $order->status = 'Cancelled';
        $order->save();

        return back()->with('success', 'Order cancelled successfully.');
    }
}
