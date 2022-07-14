<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'youtube'=> 'required',
        'title' => 'required',
        'artist_name' => 'required',
        'anime_official_cite' => 'required',
        'artist_official_cite' => 'required',
    );
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
