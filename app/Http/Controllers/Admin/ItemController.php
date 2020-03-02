<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\Category;

class ItemController extends Controller
{
    //アイテム一覧
    public function index(){



        return view('admin.item');
    }

    //アイテム投稿画面
    public function add(){

        $posts = Category::all();

        return view('admin.create', ['posts' => $posts]);
    }

    public function create(Request $request){

        $this->validate($request,Item::$rules);

        $item = new Item;
        $form = $request->all();

        $path = $request->file('image')->store('public/img');
        $item->image_path = basename($path);

        $item->category_id = $request->category_id;

        unset($form['_token']);
        unset($form['image']);


        $item->fill($form);
        $item->save();

        return redirect('admin/create');
    }
}
