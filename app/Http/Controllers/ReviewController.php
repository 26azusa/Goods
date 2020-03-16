<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Review;
use App\Category;

class ReviewController extends Controller
{
    public function add(Request $request){

        $posts = Item::orderBy('id')->get();

        $cond_name = $request->cond_name;
        $categories = Category::all();

        return view('review.create' , ['posts' => $posts,'cond_name' => $cond_name ,'categories' => $categories]);
    }

    public function create(Request $request){

        $this->validate($request,Review::$rules);

        $review = new Review;
        $review->user_id = $request->user()->id;
        $form = $request->all();

        $review->fill($form);
        $review->save();

        return redirect('item/list');
    }
}
