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
    
    public function chapter(Request $request)
    {
        return view('novel.chapter');
    }

    public function episode0(Request $request)
    {
        return view('novel.episode0');
    }

    public function episode1(Request $request)
    {
        return view('novel.episode1');
    }

    public function episode2(Request $request)
    {
        return view('novel.episode2');
    }
}