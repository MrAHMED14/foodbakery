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
            'first_name'       => 'required|string',
            'last_name'        => 'required|string',
            'nbr_table'        => 'required|integer|min:1',
            'description'      => 'nullable|string',
        ]);

        try {
            $reservationService->createReservation(
                Auth::user(),
                $request->restaurant_id,
                $request->reservation_date,
                $request->first_name,
                $request->last_name,
                $request->nbr_table,
                $request->description,
            );

            session()->flash('success', 'Reservation created successfully!');
            return redirect()->route('front.listing_details', $request->restaurant_id);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return back();
        }
    }

    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:Processing,Cancelled,Completed',
        ]);

        if ($reservation->restaurant->user_id !== Auth::user()->id) {
            return back()->with('error', 'You are not authorized to update this reservation.');
        }

        $reservation->status = $request->status;
        $reservation->save();

        return back()->with('success', 'Booking status updated successfully.');
    }

    public function updatePaymentStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'payment_status' => 'required|in:Pending,Completed,Failed,Refunded',
        ]);

        if ($reservation->restaurant->user_id !== Auth::user()->id) {
            return back()->with('error', 'You are not authorized to update this order.');
        }

        $reservation->payment_status = $request->payment_status;
        $reservation->save();

        return back()->with('success', 'Payment status updated successfully.');
    }

    public function showUserReservations(Request $request)
    {
        $user = Auth::id();
        $query = Reservation::where('user_id', $user);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        } else {
            $query->orderByRaw("CASE
                WHEN status = 'Processing' THEN 1
                WHEN status = 'Completed' THEN 2
                WHEN status = 'Cancelled' THEN 3
                ELSE 4 END")
                ->orderByRaw('reservation_date >= ? desc', [now()])
                ->orderBy('reservation_date', 'asc');
        }

        $reservations = $query->paginate(10);

        return view('front.buyer.bookings', compact('reservations'));
    }

    public function showRestaurantReservations(Request $request)
    {
        $query = Auth::user()->restaurant->reservations();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        } else {
            $query->orderByRaw("CASE
                WHEN status = 'Processing' THEN 1
                WHEN status = 'Completed' THEN 2
                WHEN status = 'Cancelled' THEN 3
                ELSE 4 END")
                ->orderByRaw('reservation_date >= ? desc', [now()])
                ->orderBy('reservation_date', 'asc');
        }

        $reservations = $query->paginate(10);

        return view('front.restaurant.bookings', compact('reservations'));
    }

    public function cancelUserReservation(Reservation $reservation)
    {
        if ($reservation->user_id !== Auth::user()->id) {
            return back()->with('error', 'You are not authorized to cancel this reservation.');
        }

        $reservation->status = 'Cancelled';
        $reservation->save();

        return back()->with('success', 'Reservation cancelled successfully.');
    }
}
