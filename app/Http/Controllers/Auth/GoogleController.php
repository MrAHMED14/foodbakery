<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $avatarPath = $googleUser->getAvatar();
                $avatarFile = Http::get($avatarPath)->body();

                $filename = 'users/' . uniqid('google_', true) . '.jpg';
                Storage::disk('public')->put($filename, $avatarFile);

                $user = User::create([
                    'name'              => $googleUser->getName(),
                    'email'             => $googleUser->getEmail(),
                    'google_id'         => $googleUser->getId(),
                    'photo'             => $filename,
                    'password'          => bcrypt(Str::random(24)),
                    'email_verified_at' => now(),
                ]);

                Auth::login($user);
            } else {
                Auth::login($user);
            }

            if (Auth::user()->role == User::ROLE_ADMIN) {
                return redirect()->intended(route('admin.index', absolute: false));
            }

            if (Auth::user()->role == User::ROLE_RESTAURANT) {
                return redirect()->intended(route('restaurant.dashboard', absolute: false));
            }

            return redirect()->intended(route('front.index', absolute: false));
        } catch (\Exception $e) {
            return redirect('/login')->withErrors('Unable to login using Google. Please try again.');
        }
    }
}
