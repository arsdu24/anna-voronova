<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{   
    public function createReview(Request $request){
        $product=Product::find($request->product);
        $user = Auth::user();
        $review = Review::create([
            'title' => $request->title,
            'description' => $request->body,
            'stars' => $request->rating,
            'user_id'=> Auth::id(),
            'product_id'=> $product->id,
        ]);
        $review->user()->associate($user);
        $review->product()->associate($product);
        return redirect()->back();
    }

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
