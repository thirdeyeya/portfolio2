<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Genre;


class GenreController extends Controller
{
    public function add()
    {
        return view('admin.music.genre');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Genre::$rules);

        $genre = new Genre;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $genre->fill($form);
        $genre->save();  
        // admin/news/createにリダイレクトする
        return redirect('admin/music/genre');
    }

}