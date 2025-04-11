<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurant;
use App\Services\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function showForm()
    {
        $restaurants = Restaurant::all();
        return view('front.reserve', compact('restaurants'));
    }

    public function store(Request $request, ReservationService $reservationService)
    {
        $request->validate([
            'restaurant_id'    => 'required|exists:restaurants,id',
            'reservation_date' => 'required|date|after:now',
            'nbr_table'        => 'required|integer|min:1',
        ]);

        try {
            $reservationService->createReservation(
                Auth::user(),
                $request->restaurant_id,
                $request->reservation_date,
                $request->nbr_table
            );

            session()->flash('success', 'Reservation created successfully!');
            return redirect()->route('front.listing_details', $request->restaurant_id);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return back();
        }
    }

    public function showUserReservations()
    {
        $user = Auth::id();
        $reservations = Reservation::where('user_id', $user)
            ->orderByRaw('reservation_date >= ? desc', [now()])
            ->orderBy('reservation_date', 'asc')
            ->paginate(10);

        return view('front.buyer.bookings', compact('reservations'));
    }

    public function showRestaurantReservations()
    {
        $restaurant = Auth::user()->restaurant->id;

        $reservations = Reservation::where('restaurant_id', $restaurant)
            ->orderByRaw('reservation_date >= ? desc', [now()])
            ->orderBy('reservation_date', 'asc')
            ->paginate(10);

        return view('front.restaurant.bookings', compact('reservations'));
    }
}
