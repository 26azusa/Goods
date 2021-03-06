<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'id',
        'name',
    ];

    public function item()
    {
        return $this->hasMany('App\Item');
    }
}
