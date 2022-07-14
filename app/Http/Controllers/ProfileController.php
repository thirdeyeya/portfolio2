<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile.index', ['user' => User::find($request->user_id)]);
    }
}