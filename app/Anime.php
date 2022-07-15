<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );
    
    public function music(){
        return $this->hasMany('App\Music');
    }
}