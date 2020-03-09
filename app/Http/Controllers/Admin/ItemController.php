<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\Category;
use Storage;

class ItemController extends Controller
{
    //アイテム一覧
    public function index(){

        $posts = Item::all();

        return view('admin.item',['posts' => $posts]);
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

        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $item->image_path = Storage::disk('s3')->url($path);

        $item->category_id = $request->category_id;

        unset($form['_token']);
        unset($form['image']);

        $item->fill($form);
        $item->save();

        return redirect('admin/index');
    }

    public function edit(Request $request){

        $categories = Category::all();
        $item = Item::find($request->id);
        if (empty($item)) {
            abort(404);
        }

        return view('admin.edit', ['categories' => $categories,'item_edit' => $item]);
    }


    public function update(Request $request){

        $this->validate($request,Item::$editRules);

        $item = Item::find($request->id);
        $item_edit = $request->all();

        if ($request->remove == 'true') {
            $item_edit['image_path'] = null;
        }else if($request->file('image')){
            $path = Storage::disk('s3')->putFile('/',$item_edit['image'],'public');
            $item->image_path = Storage::disk('s3')->url($path);
        }else {
            $item_edit['image_path'] = $item->image_path;
        }
        //dd($item_edit);
        //$item_edit->category_id = 1;

            unset($item_edit['_token']);
            unset($item_edit['image']);
            unset($item_edit['remove']);

            $item->fill($item_edit)->save();




        return redirect('admin/');
    }

}
