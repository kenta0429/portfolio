<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Novel;
use App\User;


class NovelController extends Controller
{
    // //use App\novel;
    //public function top()
   // {
   //     $novels = Novel::with('user')->limit(10)->get();
   //     return view('novel.top', ['novels' => $novels]);
   // }
   public function top(Request $request)
   {
       //SELECT * FROM novels JOIN users 
       // ON users.id = novels.user_id 
       // WHERE is_publish = 1;

       if (empty($request->keyword)) {
           $novels = Novel::with('user')->where('is_publish', 1)->orderBy('created_at', 'desc')->get();
       } else {
           $novels = Novel::with('user')
               ->sortByDesc('created_at')
               ->where('is_publish', 1)
               ->where('title', 'like', "%{$request->keyword}%")
               ->get();
       }
       $keyword = (isset($request->keyword)) ? $request->keyword : '';
       return view('novel.top', [
           'novels' => $novels,
           'keyword' => $keyword,
       ]);
   }

    public function index(Request $request)
    {
        //SELECT * FROM novels JOIN users 
        // ON users.id = novels.user_id 
        // WHERE is_publish = 1;

        if (empty($request->keyword)) {
            $novels = Novel::with('user')->where('is_publish', 1)->orderBy('updated_at', 'desc')->get();
        } else {
            $novels = Novel::with('user')
                ->sortByDesc('updated_at')
                ->where('is_publish', 1)
                ->where('title', 'like', "%{$request->keyword}%")
                ->get();
        }
        $keyword = (isset($request->keyword)) ? $request->keyword : '';
        return view('novel.index', [
            'novels' => $novels,
            'keyword' => $keyword,
        ]);
    }

    public function chapter(Request $request, $novel_id)
    {
        $novel = Novel::with('user')->find($request->novel_id);
        $episodes = Episode::where('novel_id', $novel->id)->get();
        //DB novels から小説を取得
        return view('novel.chapter', [
            'novel' => $novel,
            'episodes' => $episodes,
        ]);
    }

    public function episode(Request $request)
    {
        $novel = Novel::find($request->novel_id);
        $episode = Episode::find($request->episode_id);

        // dd($novel_id, $episode_id);
        //DB novels から小説を取得
        //DB episodes からチャプターの内容を取得
        return view(
            'novel.episode',
            [
                'novel' => $novel,
                'episode' => $episode,
            ]
        );
    }

    public function writer(Request $request)
    {
        $user = User::find($request->user_id);
        return view('novel.writer', ['user' => $user]);
    }
}
