@extends('layouts.front')

@section('title', 'プロフィール')

@section('content')
<div class="row">
  <div class="list-news col-md-8 mx-auto">
    <div>
      <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
    </div>
<div class="container">
    <h2>プロフィール</h2>
    @if ($profile != NULL)
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              氏名
          </div>
          <div class="col-md">
              {{$profile->name}}
          </div>
      </div>
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              性別
          </div>
          <div class="col-md">
              {{$profile->gender}}
          </div>
      </div>
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              趣味
          </div>
          <div class="col-md">
              {{$profile->hobby}}
          </div>
      </div>
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              自己紹介
          </div>
          <div class="col-md">
              {{$profile->introduction}}
          </div>
      </div>
    @else
      プロフィールが見つかりません
    @endif
</div>
@endsection
