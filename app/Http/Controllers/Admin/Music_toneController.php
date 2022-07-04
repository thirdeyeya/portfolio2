<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Music_tone;


class Music_toneController extends Controller
{
    public function add()
    {
        return view('admin.music.music_tone');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Music_tone::$rules);

        $music_tone = new Music_tone;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $music_tone->fill($form);
        $music_tone->save();  
        // admin/news/createにリダイレクトする
        return redirect('admin/music/music_tone');
    }

}