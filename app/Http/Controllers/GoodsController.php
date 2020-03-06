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

}
