<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\Item;

class GoodsController extends Controller
{
    public function index(){
        return view('goods');
    }

    public function add(){

        $posts = Item::all();

        return view('create' , ['posts' => $posts]);
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


}
