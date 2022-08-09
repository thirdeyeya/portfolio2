@extends('layouts.admin')
@section('title', 'アニソン検索')

@section('content')
<div class="container grid">
  <div class="row">
    <div style="margin-right: 5px;"> 
    <h4>アニメタイトル</h4>
        <form action="{{ action('Admin\MusicController@index') }}" method="get">
          <div style="width:40px;">
        <input type="text" name="anime_title">
        <input type="submit" class="btn btn-primary" value="検索">
        </div> 
      </form>
      <br>
      <h4>アーティスト名</h4>
      <form action="{{ action('Admin\MusicController@index') }}" method="get">
        <div style="width:40px;">
        <input type="text" name="artist_name">
        <input type="submit" class="btn btn-primary" value="検索"> 
        </div>
      </form>
      <br>
      <form action="{{ action('Admin\MusicController@index') }}" method="get"> 
        <div>
          <h4>ジャンル</h4>
          <select name ="genre_id">
            <option value="0" @if($cond_genre == 0) selected="selected" @endif>---</option>
            @foreach( $genres as $genre)
              <option value="{{ $genre->id }}" @if($cond_genre == $genre->id) selected="selected" @endif>{{ $genre->title }}</option>
            @endforeach  
          </select>
          <input type="submit" class="btn btn-primary" value="検索"> 
        </div>
        <br>
        <div>
          <h4>曲調</h4>
          <select name ="music_tone_id">
            <option value="0" @if($cond_music_tone == 0) selected="selected" @endif>---</option>
            @foreach( $music_tones as $music_tone)
              <option value="{{ $music_tone->id }}" @if($cond_music_tone == $music_tone->id) selected="selected" @endif>{{ $music_tone->title }}</option>
            @endforeach  
          </select>
        </div>  
        <br>
        <div>
          <h4>性別</h4>
            <select name ="gender_id">
              <option value="0" @if($cond_gender == 0) selected="selected" @endif>---</option>
              @foreach($genders as $str => $num)
                <option value="{{ $num }}" @if($cond_gender == $num) selected="selected" @endif>{{ $str }}</option>
              @endforeach 
            </select>
        </div>
        <br>
      </form> 
      </div>
    </div>
      @foreach($posts as $search)
        <div class="music-tone-color-{{ $search->music_tone_id }}">
          <form action="{{ route('favorite.store', $search->id) }}" method="post">
            @csrf
            <button type="submit" class="button">☆</button>
          </form>
          <img src="{{ asset($search->image_path) }}" alt="cdジャケット" width="180" height="180" />
          <br>
          <a href="{{ \Str::limit($search->youtube, 250) }}">YouTube</a>
          <p>曲名：{{ \Str::limit($search->title, 250) }}</p>
        　<p>アーティスト名：{{ \Str::limit($search->artist_name, 250) }}</p>
        　<a href="{{ \Str::limit($search->anime_official_cite, 250) }}">アニメ公式</a>
        　<br>  
        　<a href="{{ \Str::limit($search->artist_official_cite, 250) }}">アーティスト公式</a>
        　<br>
        　<a href="{{ action('Admin\CommentController@show', ['id' => $search->id]) }}">コメント</a>
        </div>    　
      @endforeach
　</div>
　<div>{{ $posts->links() }}</div>
</div>　
@endsection
