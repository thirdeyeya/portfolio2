@extends('layouts.admin')
@section('title', '自分のコメントの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>自分が投稿したコメント一覧</h2>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th width="20%">曲</th>
                                <th width="70%">コメント</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->comments as $comment)
                                <tr>
                                    <th>{{ $comment->music->title }}</th>
                                    <td>{{ Str::limit($comment->body, 250) }}
                                        <div>
                                            <a href="{{ action('Admin\CommentController@edit', ['id' => $comment->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\CommentController@delete', ['id' => $comment->id]) }}">削除</a>
                                        </div>
                       　　　　　　　　　　　</td>                 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
@endsection    