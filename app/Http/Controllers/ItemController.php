<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Item;
use App\Review;
use Storage;

class ItemController extends Controller
{
    //商品リスト表示
    public function list(Request $request){

        $categories = Category::all();

        $cond_name = $request->cond_name;
        $category_id = $request->category_id;

        if(!empty($cond_name) && !empty($category_id)){
            $posts = Item::where('name','like',"%$cond_name%")->where('category_id',$category_id)->orderBy('id')->get();
        }else if(!empty($cond_name)){
            $posts = Item::where('name','like',"%$cond_name%")->orderBy('id')->get();
        }else if(!empty($category_id)){
            $posts = Item::where('category_id',$category_id)->orderBy('id')->get();
        }else {
            $posts = Item::orderBy('id')->get();
        }

        return view('item.list', ['posts' => $posts, 'categories' => $categories, 'cond_name' => $cond_name, 'catedory_id' => $category_id,]);
    }

    //商品詳細表示
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
        if(count($item->reviews) >= 1){
            $favorite_average = $favorite_total / count($item->reviews);
        }else {
            $favorite_average = 0;
        }

        return view('item.detail',['item_form' => $item, 'reviews' => $item->reviews, 'cond_name' => $cond_name ,'categories' => $categories,
                    'favorite_average' => $favorite_average]);
    }
}
