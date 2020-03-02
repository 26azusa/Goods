<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = array('reviews_id');

    public static $rules = array(
        'item_id' => 'required',
        'body' => 'required',
        'favorite' => 'required',
    );

    public function user()
    {
    return $this->belongsTo('App\User');
    }

    public function item()
    {
    return $this->belongsTo('App\Item');
    }
}
