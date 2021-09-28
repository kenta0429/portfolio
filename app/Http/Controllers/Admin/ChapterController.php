<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Novel;
use App\Chapter;
use App\History;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $novel = Novel::find($request->novel_id);
        $chapters = Chapter::where('novel_id', $novel->id)->get();
        // dd($chapters);

        return view(
            'admin.chapter.index',
            [
                'novel' => $novel,
                'chapters' => $chapters,
            ]
        );
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $novel = Novel::find($request->novel_id);
        $chapters = Chapter::where('novel_id', $novel->id)->get();
        // dd($chapters);

        return view(
            'admin.chapter.create',
            [
                'novel' => $novel,
            ]
        );
    }

    public function create(Request $request)
    {  
        // $user = Auth::user();
        // $novel = Novel::find($request->novel_id);
        // $chapters = Chapter::where('novel_id', $novel->id)->get();
        // Varidationを行う
        // $this->validate($request, Chapter::$rules);
        $date = $request->all();
        dd($date);
        // $chapters = new Chapter();
        // $form = $request->all();
        // $chapters->fill($date);
        // $chapters->save();
        // $chapter_id = Chapter::insertGetId(["name" => $date["name"]]);


        return redirect('novel/{novel_id}/chapter/add');
    
    }

    public function edit(Request $request)
    {
    }

    public function update(Request $request)
    {
    }

    public function delete(Request $request)
    {
    }
}
