<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

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
        $profile->save();  

        return redirect('profile/create');
    }

    public function edit(Request $request)
    {
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
        
      // Varidationを行う
      $this->validate($request, Profile::$rules);

      // 既存のプロフィールデータを削除
      Profile::truncate();

      $profile = new Profile;
      $form = $request->all();

      unset($form['_token']);

      $profile->fill($form);
      $profile->save();

      $profile_history = new ProfileHistory;
      $profile_history->profile_id = $profile->id;
      $profile_history->edited_at = Carbon::now();
      $profile_history->save();
      
      return redirect('profile/edit?id='.$profile->id);
    }
}
