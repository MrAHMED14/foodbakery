@extends('front.master')

@section('title')
    Restaurant || {{ $restaurant->name }}
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="container" style="padding: 20px;">
        <div
            style="background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); overflow: hidden;">

            {{-- Cover Image --}}
            @if ($restaurant->cover_image)
                <img src="{{ asset('storage/' . $restaurant->cover_image) }}"
                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
            @else
                <img src="{{ asset('front/extra-images/subheader-img2-1.jpg') }}"
                    style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
            @endif

            {{-- Logo --}}
            <div style="text-align: center; margin-top: -40px;">
                @if ($restaurant->restaurant_logo)
                    <img src="{{ asset('storage/' . $restaurant->restaurant_logo) }}"
                        style="width: 80px; height: 80px; border-radius: 50%; border: 3px solid white; background: white; object-fit: cover;">
                @else
                    <img src="{{ asset('front/extra-images/listing-logo18.png') }}"
                        style="width: 80px; height: 80px; border-radius: 50%; border: 3px solid white; background: white; object-fit: cover;">
                @endif
            </div>

            {{-- Info --}}
            <h2 style="text-align: center; margin-top: 10px;">{{ $restaurant->name }}</h2>
            <p style="text-align: center;"><strong>Owner:</strong> {{ $restaurant->user->name }}</p>
            <p style="text-align: center;">{{ $restaurant->description }}</p>

            {{-- Cuisines --}}
            <div
                style="display: inline-block; background: #efefef; padding: 5px 10px; border-radius: 15px; margin-right: 5px; font-size: 14px;">
                <strong>Cuisines: </strong>
                @foreach ($restaurant->cuisines as $cuisine)
                    <span style="margin-top: 10px;">
                        @if ($cuisine->pivot->is_specialty)
                            ⭐
                        @endif
                        <span>
                            {{ $cuisine->name }}
                            @if (!$loop->last)
                                ,
                            @endif
                        </span>
                    </span>
                @endforeach
            </div>

            {{-- Menus --}}
            <div style="margin-top: 20px;">
                <strong>Menus:</strong><br>
                @foreach ($restaurant->menus as $menu)
                    <ul style="margin: 10px 30px;">
                        <li><strong>{{ $menu->name ?? 'Menu' }}</strong></li>
                        <ul>
                            @foreach ($menu->dishes as $dish)
                                <li style="width: 100%; display: flex; gap: 10px; align-items: center;">
                                    <span><strong>-</strong> {{ $dish->name }}</span>
                                    -
                                    <strong>${{ $dish->price }}</strong>
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="dish_id" value="{{ $dish->id }}">
                                        <button type="submit" style=" display: inline-block; line-height: 21px; width: 22px; height: 22px; text-align: center; border: 1px solid; border-radius: 50%;"><i class="icon-plus4"></i></button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
