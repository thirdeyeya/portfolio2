<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'artist_name' => 'required',
        'anime_official_cite' => 'required',
        'artist_official_cite' => 'required',
    );
}
