@extends('layouts.admin')
@section('title', '登録済みコメントの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>コメント一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <a href="{{ action('Admin\CommentController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div> 
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th width="20%">名前</th>
                                <th width="70%">コメント</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $comment)
                                <tr>
                                    <th>{{ $comment->user->name }}</th>
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