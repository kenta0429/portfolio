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
    public function index(Request $request)
    {
        $novels = Novel::all();
        return view('novel.index', ['novels' => $novels]);
    }

    public function chapter(Request $request, $novel_id)
    {
        $novel = Novel::find($request->novel_id);
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
