<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;

class ItemController extends Controller
{
    //アイテム一覧
    public function index(){
        return view('admin.item');
    }

    //アイテム投稿画面
    public function add(){
        return view('admin.create');
    }

    public function create(Request $request){

        $this->validate($request,Item::$rules);

        $item = new Item;
        $form = $request->all();

        $path_m = $request->file('item_image_m')->store('public/img');
        $item->path_m = basename($path_m);

        $path_s = $request->file('item_image_s')->store('public/img');
        $item->path_s = basename($path_s);

        unset($form['_token']);
        unset($form['item_image_m']);
        unset($form['item_image_s']);


        $item->fill($form);
        $item->save();

        return redirect('admin/create');
    }
}
