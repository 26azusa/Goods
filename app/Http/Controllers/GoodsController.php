<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//トップページの表示
class GoodsController extends Controller
{
    public function index(){
        return view('goods');
    }

}
