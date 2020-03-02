<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Item;

class ListController extends Controller
{
    public function index(){

        $posts = Item::all();
        $categories = Category::all();

        return view('list', ['posts' => $posts, 'categories' => $categories]);
    }
}
