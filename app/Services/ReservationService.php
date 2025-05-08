<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;
use Exception;

class ReservationService
{
    public function createReservation($user, $restaurantId, $reservationDate, $firstName, $lastName, $nbrTables, $description = null)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);

        if (!$restaurant->is_verified) {
            throw new Exception('Restaurant is not verified.');
        }

        if (!$restaurant->accepts_reservations) {
            throw new Exception('Restaurant is not accepting reservations at the moment.');
        }

        $sessionDuration = $restaurant->session_duration ? $restaurant->session_duration : 90; // Default to 90 minutes

        $reservationDateTime = Carbon::parse($reservationDate);
        $startTime = $reservationDateTime->copy();
        $endTime = $startTime->copy()->addMinutes($sessionDuration);

        $dayName = $reservationDateTime->format('l');
        $openingHour = $restaurant->openingHours()->where('day', $dayName)->first();

        if (!$openingHour || $openingHour->is_closed) {
            throw new Exception("The restaurant is closed on {$dayName}.");
        }

        $startFormatted = $startTime->format('H:i:s');
        $endFormatted = $endTime->format('H:i:s');

        if (
            $startFormatted < $openingHour->opening_time ||
            $endFormatted > $openingHour->closing_time
        ) {
            throw new Exception("The restaurant is not open at this time.");
        }

        $overlappingReservations = Reservation::where('restaurant_id', $restaurant->id)
            ->whereDate('reservation_date', $reservationDateTime->toDateString())
            ->where('status', '!=', 'Cancelled')
            ->where(function ($query) use ($startFormatted, $endFormatted) {
                $query->whereBetween('start_time', [$startFormatted, $endFormatted])
                    ->orWhereBetween('end_time', [$startFormatted, $endFormatted])
                    ->orWhere(function ($q) use ($startFormatted, $endFormatted) {
                        $q->where('start_time', '<', $startFormatted)
                            ->where('end_time', '>', $endFormatted);
                    });
            })
            ->sum('nbr_table');

        if (($overlappingReservations + $nbrTables) > $restaurant->capacity) {
            throw new Exception('No available tables for this time slot.');
        }

        return Reservation::create([
            'user_id'          => $user->id,
            'restaurant_id'    => $restaurant->id,
            'reservation_date' => $reservationDateTime,
            'start_time'       => $startFormatted,
            'end_time'         => $endFormatted,
            'session_duration' => $sessionDuration,
            'first_name'       => $firstName,
            'last_name'        => $lastName,
            'nbr_table'        => $nbrTables,
            'description'      => $description,
        ]);
    }
}
