<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $guarded =array('id');

    public static $rules = array(
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'category_id' => 'required',
    );

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function reviews()
    {
        return $this->hasmany('App\Review');
    }

}
