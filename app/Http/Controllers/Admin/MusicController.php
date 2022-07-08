<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Music;
use App\Genre;
use App\Music_tone;
use App\Gender;

class MusicController extends Controller
{
    public function add()
    {
        
        return view('admin.music.comment');
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
        $cond_genre = $request->genre_id;
        $cond_music_tone = $request->music_tone_id;
        $cond_gender = $request->gender_id;
        $genres = Genre::all();
        $music_tones = Music_tone::all();
        $genders = config('gender');
        $q = Music::query();
        if($cond_genre != 0){
            $q->where('genre_id', $cond_genre);
        }
        if($cond_music_tone != 0){
            $q->where('music_tone_id', $cond_music_tone);
        }
        if($cond_gender != 0){
            $q->where('gender_id', $cond_gender);
        }
        $posts = $q->get();
        return view('admin.music.index', ['posts' => $posts, 'cond_genre' => $cond_genre, 'genres' => $genres, 'cond_music_tone' => $cond_music_tone, 'music_tones' => $music_tones, 'cond_gender' => $cond_gender, 'genders' => $genders]);
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
    
     public function favorite_music()
    {
        $music = \Auth::user()->favorite_music()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'music' => $music,
        ];
        return view('music.favorites', $data);
    }
}
