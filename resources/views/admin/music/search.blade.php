@extends('layouts.admin')
@section('title', 'アニソン検索')
@section('content')
<div id="main">
  <div class="side">
    <div>
    <h4>ジャンル</h4>
      <select name ="genre">
        <option value="0" @if($q['genre'] == 0) selected="selected" @endif>---</option>
        @foreach( $genres as $genre)
          <option value="{{ $genre->id }}" @if($q['genre'] == $genre->id) selected="selected" @endif>{{ $genre->title }}</option>
        @endforeach  
      </select>
    </div>
      <br>
    <div id="music_tone">
    <h4>曲調</h4>
      <select>
        
      </select>
    </div>
      <br>
    <div id="gender">
    <h4>性別</h4>
      <select>
        
      </select>
    </div>　
  </div>
  <div id="contents">
      <br>
      <div id="itemList"></div>
  </div>
</div>
 @endsection
 