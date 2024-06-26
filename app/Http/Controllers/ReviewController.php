<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $userReviews = Review::all();
        return view('reviews', compact('userReviews'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'game_title' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'review_text' => 'required|string',
        ]);

        Review::create([
            'game_title' => $request->game_title,
            'user_name' => $request->user_name,
            'review_text' => $request->review_text,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review submitted successfully!');
    }
}