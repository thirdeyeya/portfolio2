@extends('layouts.admin')
@section('title', '登録済みコメントの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>コメント一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <a href="{{ action('Admin\CommentController@add',['music_id'=> $music_form->id]) }}" role="button" class="btn btn-primary">新規作成</a>
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
                            @foreach($music_form->comments as $comment)
                                <tr>
                                    <th>{{ $comment->user->name }}
                                    　　<div>
                                    　　   <a href="{{ route('profile', ['user_id'=> $comment->user->id]) }}">プロフィール</a>
                                    　　</div>
                                    </th>
                                    <td>{{ Str::limit($comment->body, 250) }}</td>                 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
@endsection    