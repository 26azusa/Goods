<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ListController extends Controller
{
    public function index(){

        $posts = Item::all();

        return view('list', ['posts' => $posts]);
    }
}
