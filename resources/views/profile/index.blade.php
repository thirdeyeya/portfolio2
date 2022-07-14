@extends('layouts.admin')

@section('title', 'プロフィール')

@section('content')
<div class="row">
  <div class="list-news col-md-8 mx-auto">
    <div>
      @if ($user->profile != NULL)
      <a href="{{ action('Admin\ProfileController@edit', ['id' => $user->profile->id]) }}">編集</a>
      @endif
    </div>
    <div>
      @if ($user->profile == NULL)
      <a href="{{ action('Admin\ProfileController@create') }}">新規作成</a>
      @endif
    </div>
<div class="container">
    <h2>プロフィール</h2>
    @if ($user->profile != NULL)
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              性別
          </div>
          <div class="col-md">
              {{$user->profile->gender}}
          </div>
      </div>
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              趣味
          </div>
          <div class="col-md">
              {{$user->profile->hobby}}
          </div>
      </div>
      <hr color="#fff">
      <div class="row">
          <div class="col-md-4">
              自己紹介
          </div>
          <div class="col-md">
              {{$user->profile->introduction}}
          </div>
      </div>
    @else
      プロフィールが見つかりません
    @endif
</div>
@endsection
