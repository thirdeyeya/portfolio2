<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );
}
