<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;

class CommentController extends Controller
{
    public function show(Request $request) 
    {
        $posts = Comment::all();
        return view('admin.music.commentindex', ['posts' => $posts]);
    }
    public function create(Request $request) 
    {
        // Validationを行う
        $this->validate($request, Comment::$rules);
        $comment = new Comment();
        $form = $request->all();
        
        // データベースに保存する
        $comment->fill($form);
        $comment->save();

        return redirect('comment/create');
    }
    public function add() 
    {
        return view('admin.music.comment');
    }
    
    public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $comment = Comment::find($request->id);
      if (empty($comment)) {
        abort(404);    
      }
      return view('admin.music.edit', ['comment_form' => $comment]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Comment::$rules);
      // News Modelからデータを取得する
      $comment = Comment::find($request->id);
      // 送信されてきたフォームデータを格納する
      $comment_form = $request->all();
      unset($comment_form['_token']);

      // 該当するデータを上書きして保存する
      $comment->fill($comment_form)->save();

      return redirect('comment');
  }
  
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $comment = Comment::find($request->id);
      // 削除する
      $comment->delete();
      return redirect('comment/');
  }  
}

