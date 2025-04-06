<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartService;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function add(Request $request)
    {
        $request->validate([
            'dish_id' => 'required|exists:dishes,id',
        ]);

        try {
            $this->cartService->addDish($request->dish_id);
            return redirect()->back()->with('success', 'Dish added to cart.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function view()
    {
        $cart = $this->cartService->getCart();
        $totalPrice = $this->cartService->getTotalPrice();
        return view('front.cart.view', compact('cart', 'totalPrice'));
    }

    public function clear()
    {
        $this->cartService->clearCart();
        return redirect()->route('front.cart.view')->with('success', 'Cart cleared.');
    }
}
