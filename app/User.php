<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function favorite_music()
    {
        return $this->belongsToMany(Music::class, 'favorites', 'user_id', 'music_id');
    }
    
    public function music()
    {
        return $this->hasMany(Music::class);
    }
    
    public function has_favorite_music(){
    //$this->favorite_music（配列）の件数が0より大きければtrue, そうでなければfalseを返す
        foreach($this->favorite_music as $value){
            if ($value !== 0) {
                return true;
            } else {
                return false;  
            }   
        }
        
    }
}
