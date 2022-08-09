<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required',
    );
    
    public function user(){
        //1対多のモデルを構築する
        return $this->belongsTo('App\User');
    }
    
    public function music(){
        return $this->belongsTo('App\Music');
    }
}
