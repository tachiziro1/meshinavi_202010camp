<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    function category(){
        return $this->belongsTo('App\Category');
    }
    public function menus()
    {
        return $this->hasMany('App\Menu');
    }
}
