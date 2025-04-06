@extends('front.master')

@section('title')
    Restaurant || Listings
@endsection

@section('content')
    <div class="container">
        <h1>Make a Reservation</h1>

        <form action="{{ route('reservation.reserve') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="restaurant_id">Select Restaurant:</label>
                <select id="restaurant_id" name="restaurant_id" required>
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="reservation_date">Reservation Date & Time:</label><br>
                <input type="datetime-local" id="reservation_date" name="reservation_date" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="nbr_table">Number of Tables:</label><br>
                <input type="number" id="nbr_table" name="nbr_table" min="1" required>
            </div>

            <button type="submit"
                style="cursor: pointer;padding: 10px 20px; background: #3490dc; color: white; border: none; border-radius: 5px;">Reserve</button>
        </form>
    </div>
@endsection
