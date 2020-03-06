<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Item;

class ListController extends Controller
{
    public function index(Request $request){

        $categories = Category::all();

        $cond_name = $request->cond_name;
        $category_id = $request->category_id;

        if(!empty($cond_name) && !empty($category_id)){
            $posts = Item::where('name','like',"%$cond_name%")->where('category_id',$category_id)->get();
        }else if(!empty($cond_name)){
            $posts = Item::where('name','like',"%$cond_name%")->get();
        }else if(!empty($category_id)){
            $posts = Item::where('category_id',$category_id)->get();
        }else {
            $posts = Item::all();
        }

        return view('list', ['posts' => $posts, 'categories' => $categories, 'cond_name' => $cond_name, 'catedory_id' => $category_id,]);
    }
}
