<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class FavoriteController extends Controller
{
    public function store($musicId) {
        //dd($musicId);
        $user = Auth::user();
        if (!$user->has_favorite_music($musicId)) {
            $user->favorite_music()->attach($musicId);
        }
        return back();
    }
    public function destroy($musicId) {
        $user = Auth::user();
        if ($user->has_favorite_music($musicId)) {
            $user->favorite_music()->detach($musicId);
        }
        return back();
    }
}
