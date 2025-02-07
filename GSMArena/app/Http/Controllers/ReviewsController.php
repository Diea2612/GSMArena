<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    // Method to get all reviews for a specific phone
    public function getReviewsByPhone($phoneId)
    {
        $reviews = Reviews::getReviewsByPhone($phoneId);
        return response()->json($reviews);
    }

    // Method to get all reviews by a specific user
    public function getReviewsByUser($userId)
    {
        $reviews = Reviews::getReviewsByUser($userId);
        return response()->json($reviews);
    }

    // Method to search reviews by title
    public function searchReviewsByTitle(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $reviews = Reviews::searchReviewsByTitle($searchTerm);
        return response()->json($reviews);
    }

    // Method to calculate the average rating for a specific phone
    public function averageRating($phoneId)
    {
        $averageRating = Reviews::averageRating($phoneId);
        return response()->json(['average_rating' => $averageRating]);
    }

    // Method to create a new review
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone_id' => 'required|exists:phones,id',
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:10', // Assuming rating is out of 10
        ]);

        $review = Reviews::create($validatedData);
        return response()->json($review, 201);
    }

    // Method to update an existing review
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'rating' => 'sometimes|required|integer|min:1|max:10',
        ]);

        $review = Reviews::find($id);
        if ($review) {
            $review->update($validatedData);
            return response()->json($review);
        }

        return response()->json(['message' => 'Review not found'], 404);
    }

    // Method to delete a review
    public function destroy($id)
    {
        $review = Reviews::find($id);
        if ($review) {
            $review->delete();
            return response()->json(['message' => 'Review deleted successfully']);
        }

        return response()->json(['message' => 'Review not found'], 404);
    }
}
