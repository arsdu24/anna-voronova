<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function publishReview(Request $request){
       $review = Review::find($request->id);
       $review->published =1;
       $review->save();
    }

    public function unpublishReview(Request $request){
        $review = Review::find($request->id);
        $review->published = 0;
        $review->save();
    }

    public function deleteReview(Request $request){
        $review = Review::find($request->id);
        $review->delete();
    }
}
