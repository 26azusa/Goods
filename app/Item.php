<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $guarded =array('item_id');

    public static $rules = array(
        'item_name' => 'required',
        'item_description' => 'required',
        'item_image_m' => 'required',
        'item_image_s' => 'required',
        'item_quantity' => 'required',
        'item_price' => 'required',
        'category' => 'required',
    );
}
