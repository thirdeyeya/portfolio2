@extends('layouts.admin')
@section('title', 'お気に入り曲一覧')

@section('content')
<h1>お気に入りの曲</h1>
<div class="container">
  <div class="row">
    　@foreach($posts as $search)
    　　<div class="col-3">
          <form action="{{ route('favorite.destroy', $search->id) }}" method="post">
            @csrf
            <button>★</button>
          </form>
          <img src="{{ asset($search->image_path) }}" alt="cdジャケット" width="180" height="180" /> 
          <a href="{{ \Str::limit($search->youtube, 250) }}">YouTube</a>
          <p>曲名：{{ \Str::limit($search->title, 250) }}</p>
        　<p>アーティスト名：{{ \Str::limit($search->artist_name, 250) }}</p>
        　<a href="{{ \Str::limit($search->anime_official_cite, 250) }}">アニメ公式</a>
        　<br>  
        　<a href="{{ \Str::limit($search->artist_official_cite, 250) }}">アーティスト公式</a>
        　<br>
        　<a href="{{ action('Admin\MusicController@add') }}">コメント</a>
        </div>　
      @endforeach
  </div>
</div>  
@endsection()
