<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Novel;


class NovelController extends Controller
{
    // //use App\novel;
    public function index(Request $request)
    {
        return view('novel.index');
    }
    
    public function chapter(Request $request, $novel_id)
    {
        //DB novels から小説を取得
        return view('novel.chapter');
    }

    public function episode(Request $request, $novel_id, $episode_id)
    {
        // dd($novel_id, $episode_id);
        //DB novels から小説を取得
        //DB episodes からチャプターの内容を取得
        return view('novel.episode');
    }

}