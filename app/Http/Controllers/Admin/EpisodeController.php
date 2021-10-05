<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Novel;
use App\Episode;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{
    public function index(Request $request)
    {
        $novel = Novel::find($request->novel_id);
        $episodes = Episode::where('novel_id', $novel->id)->get();
        // dd($episodes);
        return view(
            'admin.episode.index',
            [
                'novel' => $novel,
                'episodes' => $episodes,
            ]
        );
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $novel = Novel::find($request->novel_id);
        // dd($episodes);

        return view(
            'admin.episode.create',
            [
                'novel' => $novel,
            ]
        );
    }

    public function create(Request $request)
    {
        // dd($episode);
        $novel = Novel::find($request->novel_id);

        if ($novel) {
            $this->validate($request, Episode::$rules);

            $episode = new Episode;
            $form = $request->all();
            unset($form['_token']);
            $episode->fill($form);
            $episode->save();
        }

        return redirect(route('admin.episode', ['novel_id' => $novel->id]));
    }

    public function edit(Request $request)
    {
        $episode = Episode::find($request->episode_id);
        $novel = Novel::find($episode->novel_id);
        return view('admin.episode.edit', 
        [
            'novel' => $novel,
            'episode' => $episode,
        ]
    );
    }

}
