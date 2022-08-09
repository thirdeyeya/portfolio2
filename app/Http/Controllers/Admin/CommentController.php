<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;
use Auth;
use App\Music;
use App\User;

class CommentController extends Controller
{
    // コメント一覧を取得する
    public function show(Request $request) 
    {
        // モデルを取得する
        $music = Music::find($request->id);
        
        return view('admin.music.commentindex', ['music_form' => $music]);
    }
    
    // ユーザーごとのコメントを取得する
    public function index(Request $request) 
    {
        // モデルを取得する
        $user = User::find($request->id);
        return view('admin.music.mycomment', ['user_form' => $user]);
    }
    
    // コメントを作成する
    public function create(Request $request) 
    {
        // Validationを行う
        $this->validate($request, Comment::$rules);
        $comment = new Comment();
        $form = $request->all();
        
        // データベースに保存する
        $comment->fill($form);
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect('comment/create');
    }
    
    // 楽曲ごとのコメントを取得する
    public function add(Request $request) 
    {
        return view('admin.music.comment', ['music_id' => $request->music_id]);
    }
    
    // 編集するコメントを取得する
    public function edit(Request $request)
    {
      // Comment Modelからデータを取得する
        $comment = Comment::find($request->id);
        if (empty($comment)) {
            abort(404);    
        }
        return view('admin.music.edit', ['comment_form' => $comment]);
    }

    // コメントを編集する
    public function update(Request $request)
    {
      // Validationをかける
        $this->validate($request, Comment::$rules);
      // Comment Modelからデータを取得する
        $comment = Comment::find($request->id);
        $music_id = $comment->music_id;
      // 送信されてきたフォームデータを格納する
        $comment_form = $request->all();
        unset($comment_form['_token']);

      // 該当するデータを上書きして保存する
        $comment->fill($comment_form)->save();

        return redirect('comment/?id=' . $music_id);
    }
  
    // コメントを削除する
    public function delete(Request $request)
    {
      // 該当するComment Modelを取得
        $comment = Comment::find($request->id);
        $music_id = $comment->music_id;
      // 削除する
        $comment->delete();
        
        return redirect('comment/?id=' . $music_id);
    }  
}

