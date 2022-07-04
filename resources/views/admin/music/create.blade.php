@extends('layouts.admin')
@section('title', 'アニソンの新規作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>アニソン新規作成</h2>
      <form action="{{ action('Admin\MusicController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="title">曲名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="artist_name">アーティスト名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="artist_name" value="{{ old('artist_name') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="anime_official_cite">ア二メ公式</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="anime_official_cite" value="{{ old('anime_official_cite') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="artist_official_cite">アーティスト公式</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="artist_official_cite" value="{{ old('artist_official_cite') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">CDジャケット</label>
          <div class="col-md-10">
            <input type="file" class="form-control-file" name="image">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">genres_id</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="genres_id" value="{{ old('genres_id') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">music_tones_id</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="music_tones_id" value="{{ old('music_tones_id') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">genders_id</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="genders_id" value="{{ old('genders_id') }}">
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection

