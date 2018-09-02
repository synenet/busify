<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    protected $fillable = [
        'name', 'state',
    ];

    public function state(){
    	$this->belongsTo('App\State');
    }

}
