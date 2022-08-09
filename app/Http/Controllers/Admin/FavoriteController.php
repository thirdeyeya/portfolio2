<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class FavoriteController extends Controller
{
    // お気に入りの曲を保存する
    public function store($musicId) {
        $user = Auth::user();
        if (!$user->has_favorite_music($musicId)) {
            // $musicIdのfavorite_musicを紐づける
            $user->favorite_music()->attach($musicId);
        }
        return back();
    }
    
    // お気に入りの曲を解除する
    public function destroy($musicId) {
        $user = Auth::user();
        if ($user->has_favorite_music($musicId)) {
            // $musicIdのfavorite_musicの紐づけを解除する
            $user->favorite_music()->detach($musicId);
        }
        return back();
    }
}
