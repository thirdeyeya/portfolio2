@extends('layouts.admin')
@section('title', '性別の新規登録')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>性別新規登録</h2>
      <form action="{{ action('Admin\GenderController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="title">性別</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>
        
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection

