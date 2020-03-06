<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\Item;
use App\Category;

class GoodsController extends Controller
{
    public function index(){
        return view('goods');
    }

    public function add(Request $request){

        $posts = Item::all();


        $cond_name = $request->cond_name;
        $categories = Category::all();

        return view('create' , ['posts' => $posts,'cond_name' => $cond_name ,'categories' => $categories]);
    }

    public function create(Request $request){

        $this->validate($request,Review::$rules);

        $review = new Review;
        $review->user_id = $request->user()->id;
        $form = $request->all();

        $review->fill($form);
        $review->save();

        return redirect('create');
    }

    public function detail(Request $request){

        $item = Item::find($request->id);
        if(empty($item)){
            abort(404);
        }

        $cond_name = $request->cond_name;
        $categories = Category::all();

        $favorite_total = 0;
        foreach($item->reviews as $review){
             $favorite_total += $review->favorite;
         }
         $favorite_average = $favorite_total / count($item->reviews);

        return view('detail',['item_form' => $item, 'reviews' => $item->reviews, 'cond_name' => $cond_name ,'categories' => $categories,
                    'favorite_average' => $favorite_average]);
    }

}
