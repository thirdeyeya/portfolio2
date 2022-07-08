<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store($musicId) {
        $user = \\Auth::user();
        if (!$user->is_favorite($musicId)) {
            $user->favorite_music()->attach($musicId);
        }
        return back();
    }
    public function destroy($musicId) {
        $user = \\Auth::user();
        if ($user->is_favorite($musicId)) {
            $user->favorite_music()->detach($musicId);
        }
        return back();
    }
}
