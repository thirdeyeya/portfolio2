@extends('layouts.admin')
@section('title', 'アニソン検索')
@section('content')
<div id="main">
  <div class="side">
    <div id="genre">
    <h4>ジャンル</h4>
      <select>
        <option v-for="m in msgs">{{ m }}</option>
      </select>
    </div>
      <br>
    <div id="music_tone">
    <h4>曲調</h4>
      <select>
        <option v-for="m in msgs">{{ m }}</option>
      </select>
    </div>
      <br>
    <div id="gender">
    <h4>性別</h4>
      <select>
        <option v-for="m in msgs">{{ m }}</option>
      </select>
    </div>　
  </div>
  <div id="contents">
      <br>
      <div id="itemList"></div>
  </div>
</div>
 @endsection
 