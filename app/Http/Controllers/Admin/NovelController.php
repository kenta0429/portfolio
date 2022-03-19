<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Novel;
use App\History;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NovelController extends Controller
{
    public function add()
    {
        //認証ユーザの取得
        $user = Auth::user();
        // dd($user);
        return view(
            'admin.novel.create',
            //データを渡す
            ['user' => $user,]
        );
    }

    public function chapter(Request $request)
    {
        //認証ユーザの取得
        $user = Auth::user();
        // dd($user);
        $novel = Novel::find($request->novel_id);
        return view(
            'admin.novel.chapter',
            //データを渡す
            [
                'user' => $user,
                'novel' => $novel,
            ]
        );
    }

    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Novel::$rules);

        $novel = new Novel;
        $form = $request->all();
        // フォームから画像が送信されてきたら、保存して、$novel->image_path に画像のパスを保存する
        //   if (isset($form['image'])) {
        //     $path = $request->file('image')->store('public/image');
        //     $novel->image_path = basename($path);
        //   } else {
        //     $novel->image_path = null;
        //   }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        //   unset($form['image']);
        $novel->timestamps = false; 
        // データベースに保存する
        $novel->fill($form);
        $novel->save();

        return redirect('admin/novel/');
    }

    public function index(Request $request)
    {
        //認証ユーザの取得
        $user = Auth::user();

        //SELECT * FROM novels WHERE user_id = xx
        $novels = Novel::where('user_id', $user['id'])->get();
        return view('admin.novel.index', ['novels' => $novels]);
    }

    public function edit(Request $request)
    {
        $novel = Novel::find($request->id);
        return view('admin.novel.edit', ['novel' => $novel]);
    }


    public function update(Request $request)
    {
        //TODO validate
        // $this->validate($request, Novel::$rules);

        // Novel Modelからデータを取得する
        $novel = Novel::find($request->id);

        // 送信されてきたフォームデータを格納する
        $novel_form = $request->all();
        unset($novel_form['_token']);

        // 該当するデータを上書きして保存する
        $novel->fill($novel_form)->save();
        return redirect('admin/novel');
    }

    public function delete(Request $request)
    {
        // 該当するNovel Modelを取得
        $novel = Novel::find($request->id);
        // 削除する
        $novel->delete();
        return redirect('admin/novel');
    }
}
