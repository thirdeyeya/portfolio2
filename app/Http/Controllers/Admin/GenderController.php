<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Gender;


class GenderController extends Controller
{
    public function add()
    {
        return view('admin.music.gender');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Gender::$rules);

        $gender = new Gender;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $gender->fill($form);
        $gender->save();  
        // admin/news/createにリダイレクトする
        return redirect('admin/music/gender');
    }

}