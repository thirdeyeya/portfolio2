@extends('layouts.admin')
@section('title', 'コメントの編集')

@section('content')
    <div class="container">
	<div class="row">
	    <div class="col-md-8 mx-auto">
		<h2>コメント編集</h2>
		<form action="{{ action('Admin\SearchController@update') }}" method="post" enctype="multipart/form-data">
		    @if (count($errors) > 0)
			<ul>
			    @foreach($errors->all() as $e)
				<li>{{ $e }}</li>
			    @endforeach
			</ul>
		    @endif
		    <div class="form-group row">
			<label class="col-md-2" for="body">本文</label>
			<div class="col-md-10">
			    <textarea class="form-control" name="body" rows="20">{{ $news_form->body }}</textarea>
			</div>
		    </div>
		    <div class="form-group row">
			<div class="col-md-10">
			    <input type="hidden" name="id" value="{{ $search_form->id }}">
			    {{ csrf_field() }}
			    <input type="submit" class="btn btn-primary" value="更新">
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>
@endsection