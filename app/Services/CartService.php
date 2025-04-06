<?php

namespace App\Services;

use App\Models\Dish;

class CartService
{
    public function addDish($dishId, $quantity = 1)
    {
        $dish = Dish::findOrFail($dishId);
        $restaurantId = $dish->menu->restaurant_id;

        $cart = session()->get('cart', []);

        if (!isset($cart[$restaurantId])) {
            $cart[$restaurantId] = [];
        }

        // Check if the dish already exists
        $found = false;
        foreach ($cart[$restaurantId] as &$cartDish) {
            if ($cartDish['dish_id'] === $dish->id) {
                $cartDish['quantity'] += $quantity;
                $found = true;
                break;
            }
        }

        unset($cartDish);

        if (!$found) {
            $cart[$restaurantId][] = [
                'dish_id' => $dish->id,
                'name' => $dish->name,
                'price' => $dish->price,
                'quantity' => $quantity,
            ];
        }

        session(['cart' => $cart]);
    }

    public function getTotalPrice()
    {
        $cart = session('cart', []);
        $totalPrice = 0;

        foreach ($cart as $restaurantId => $dishes) {
            foreach ($dishes as $dish) {
                $totalPrice += $dish['price'] * $dish['quantity'];
            }
        }

        return $totalPrice;
    }

    public function getCart()
    {
        return session('cart', []);
    }

    public function clearCart()
    {
        session()->forget('cart');
    }

    public function removeDish($restaurantId, $dishId)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$restaurantId])) {
            return;
        }

        $cart[$restaurantId] = array_filter($cart[$restaurantId], function ($cartDish) use ($dishId) {
            return $cartDish['dish_id'] !== $dishId;
        });

        if (empty($cart[$restaurantId])) {
            unset($cart[$restaurantId]);
        }

        session(['cart' => $cart]);
    }
}
