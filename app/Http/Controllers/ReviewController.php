<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\ReviewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'comment' => 'required|string|max:500',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => Auth::user()->id,
            'restaurant_id' => $request->restaurant_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return back()->with('success', 'Review submitted successfully.');
    }

    public function reply(Request $request, $reviewId)
    {
        $request->validate([
            'reply' => 'required|string|max:500',
        ]);

        $review = Review::findOrFail($reviewId);
        $restaurant = $review->restaurant;

        if (Auth::check() && Auth::user()->id !== $restaurant->user_id) {
            abort(403, 'Unauthorized action.');
        }

        if ($review->response) {
            return back()->with('error', 'This review already has a response.');
        }

        ReviewResponse::create([
            'review_id' => $review->id,
            'reply' => $request->reply,
        ]);

        return back()->with('success', 'Reply submitted successfully.');
    }
}
