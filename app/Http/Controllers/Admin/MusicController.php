<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Music;


class MusicController extends Controller
{
    public function add()
    {
        return view('admin.music.search');
    }

    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Music::$rules);

        $music = new Music;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $music->image_path = basename($path);
        } else {
            $music->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $music->fill($form);
        $music->save();  
        // admin/news/createにリダイレクトする
        return redirect('admin/music/create');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Music::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }
        return view('admin.music.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $music = Music::find($request->id);
        if (empty($music)) {
            abort(404);    
        }
        return view('admin.music.edit', ['music_form' => $music]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Music::$rules);
        // News Modelからデータを取得する
        $music = Music::find($music->id);
        // 送信されてきたフォームデータを格納する
        $music_form = $request->all();
        if ($request->remove == 'true') {
            $music_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $music_form['image_path'] = basename($path);
        } else {
            $music_form['image_path'] = $music->image_path;
        }

        unset($music_form['image']);
        unset($music_form['remove']);
        unset($music_form['_token']);
        $music->fill($music_form)->save();
         
        // 該当するデータを上書きして保存する
        return redirect('admin/music');
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $music = Music::find($request->id);
        // 削除する
        $music->delete();
        return redirect('admin/music/');
    }
}
