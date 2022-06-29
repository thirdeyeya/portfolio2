@extends('layouts.search')
@section('title', 'アニソン検索')
@section('content')
<div id="main">
  <div class="side">
    <div>
    <h4>ジャンル</h4>
      <select id="mainMenu"></select>
    </div>
      <br>
    <div>
    <h4>曲調</h4>
      <select id="subMenu1"></select>
    </div>
      <br>
    <div>
    <h4>性別</h4>
      <select id="subMenu2"></select>
    </div>　
  </div>
  <div id="contents">
      <br>
      <div id="itemList"></div>
  </div>
</div>
 @endsection
 