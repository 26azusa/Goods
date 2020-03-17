<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Review;
use App\Category;

class ReviewController extends Controller
{
    //口コミ投稿画面表示
    public function add(Request $request){

        //検索画面用->商品リストに戻る
        $posts = Item::orderBy('id')->get();
        $cond_name = $request->cond_name;
        $categories = Category::all();

        return view('review.create' , ['posts' => $posts,'cond_name' => $cond_name ,'categories' => $categories]);
    }

    //口コミ投稿->保存機能
    public function create(Request $request){

        $this->validate($request,Review::$rules);

        $review = new Review;
        $review->user_id = $request->user()->id;
        $form = $request->all();

        $review->fill($form)->save();

        return redirect('item/list');
    }
}
