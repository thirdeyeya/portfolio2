<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Music;
use App\Genre;
use App\Music_tone;
use App\Gender;
use App\Anime;

class MusicController extends Controller
{
    public function index(Request $request)
    {
        $cond_genre = $request->genre_id;
        $cond_music_tone = $request->music_tone_id;
        $cond_gender = $request->gender_id;
        $cond_artist_name = $request->artist_name;
        $cond_anime_title = $request->anime_title;
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
        if($cond_artist_name){
            $q->where('artist_name', 'like',  '%' . $cond_artist_name . '%');
        }
        
        $posts = $q->get();
        
        if($cond_anime_title){
            $animes = Anime::where('title', 'like', '%' . $cond_anime_title . '%')->get();
            
            $posts = collect($animes);
           
            foreach($animes as $anime){
                $posts->concat($animes)->concat($anime->music);
                
            }
        }
        return view('admin.music.index', ['posts' => $posts, 'cond_genre' => $cond_genre, 'genres' => $genres, 'cond_music_tone' => $cond_music_tone, 'music_tones' => $music_tones, 'cond_gender' => $cond_gender, 'genders' => $genders]);
    }

     public function favorite_music()
    {
        $posts = \Auth::user()->favorite_music()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'posts' => $posts,
        ];
        return view('admin.music.favorites', $data);
    }
}
