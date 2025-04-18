<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;
use Exception;

class ReservationService
{
    public function createReservation($user, $restaurantId, $reservationDate, $firstName, $lastName, $nbrTables, $sessionDuration = 90)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);

        if ($restaurant->is_verified == 0) {
            throw new Exception('Restaurant is not verified.');
        }

        $reservationDateTime = Carbon::parse($reservationDate);
        $startTime = $reservationDateTime->copy();
        //TODO: Make session duration dynamic (come from restaurant)
        $endTime = $startTime->copy()->addMinutes($sessionDuration);

        $dayName = $reservationDateTime->format('l');
        $openingHour = $restaurant->openingHours()->where('day', $dayName)->first();

        if (!$openingHour || $openingHour->is_closed) {
            throw new Exception("The restaurant is closed on {$dayName}.");
        }

        if (
            $startTime->format('H:i:s') < $openingHour->opening_time ||
            $endTime->format('H:i:s') > $openingHour->closing_time
        ) {
            throw new Exception("The restaurant is not open at this time.");
        }

        //TODO: Check if resarvation was cancelled
        $overlappingReservations = Reservation::where('restaurant_id', $restaurant->id)
            ->whereDate('reservation_date', $reservationDateTime->toDateString())
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where(function ($q) use ($startTime, $endTime) {
                    $q->whereBetween('start_time', [$startTime->format('H:i:s'), $endTime->format('H:i:s')])
                      ->orWhereBetween('end_time', [$startTime->format('H:i:s'), $endTime->format('H:i:s')])
                      ->orWhere(function ($q2) use ($startTime, $endTime) {
                          $q2->where('start_time', '<', $startTime->format('H:i:s'))
                             ->where('end_time', '>', $endTime->format('H:i:s'));
                      });
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
            'start_time'       => $startTime->format('H:i:s'),
            'end_time'         => $endTime->format('H:i:s'),
            'session_duration' => $sessionDuration,
            'first_name'       => $firstName,
            'last_name'        => $lastName,
            'nbr_table'        => $nbrTables,
            'status'           => 'pending',
        ]);
    }
}
