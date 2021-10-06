<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profiles;
use App\ProfilesHistories;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
        public function add()
    {
        return view('admin.profile.create');
    }

   public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, Profiles::$rules);
      
      $profile = new Profiles;
      $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
     
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
     
      // データベースに保存する
      $profile->fill($form);
      $profile->save();
      
      return redirect('admin/profile');
  }
    
     public function index(Request $request)
  {
    $profiles = Profiles::find($request->id);
      return view('admin.profile.index');
  }
  
   public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $profiles = Profiles::find($request->id);
      if (empty($profiles)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profiles_form' => $profiles]);
  }
    
    

     public function update(Request $request)
  {
       // Validationをかける
      $this->validate($request, Profiles::$rules);
      // News Modelからデータを取得する
      $profiles = Profiles::find($request->id);
      // 送信されてきたフォームデータを格納する
       $profiles_form = $request->all();
        if ($request->remove == 'true') {
            $profiles_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $profiles_form['image_path'] = basename($path);
        } else {
            $profiles_form['image_path'] = $profiles->image_path;
        }
     

      unset($profiles_form['image']);
      unset($profiles_form['remove']);
      unset($profiles_form['_token']);
      // 該当するデータを上書きして保存する
      $profiles->fill($profiles_form)->save();
       $history = new ProfilesHistories;
        $history->profiles_id = $profiles->id;
        $history->edited_at = Carbon::now();
        $history->save();

       
      return redirect('admin/profile');
  }
   public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $news = Profiles::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/profile');
  }  
    
}