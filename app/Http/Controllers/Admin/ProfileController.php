<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;
use Auth;

use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    // プロフィール作成画面を表示する
    public function add()
    {
        return view('admin.profile.create');
    }
    
    // プロフィールを作成する
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        // データベースに保存する
        $profile->fill($form);
        $profile->user_id = Auth::id();
        $profile->save();  

        return redirect('profile/create');
    }

    // 編集するプロフィールを取得する
    public function edit(Request $request)
    {
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    // プロフィールを編集する
    public function update(Request $request)
    {
        
      // Varidationを行う
      $this->validate($request, Profile::$rules);

      //モデルを取得する
      $profile = Profile::find($request->id);
      $profile_form = $request->all();

      unset($profile_form['_token']);

      $profile->fill($profile_form)->save();
      //更新履歴
      $profile_history = new ProfileHistory;
      $profile_history->profile_id = $profile->id;
      $profile_history->edited_at = Carbon::now();
      $profile_history->save();
      
      return redirect('profile/edit?id='.$profile->id);
    }
}
