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

    public function userOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(10);
        return view('front.buyer.orders', compact('orders'));
    }

    public function restaurantOrders()
    {
        $orders = Auth::user()->restaurant->orders()->paginate(10);
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
            'city' => 'required|string',
            'state' => 'required|string',
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
                'status' => 'pending',
                'total' => 0,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'order_type' => $request->order_type,
                'payment_method' => $request->payment_method,
                'payment_status' => 'FIX IT LATER',
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
}
