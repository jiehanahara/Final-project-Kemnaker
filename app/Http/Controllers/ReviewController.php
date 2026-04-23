<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Attraction;

class ReviewController extends Controller
{
    // Admin page (list reviews)
    public function index()
    {
        $reviews = Review::approved()->latest()->get();
        return view('Admin.pages.review.index', compact('reviews'));
    }

    // Store review from form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'attraction_id' => 'required|exists:attractions,id',
        ]);

        Review::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'status' => 'pending',
            'attraction_id' => $request->attraction_id,
        ]);

        return back()->with('success', 'Review submitted and waiting for approval.');
    }

}