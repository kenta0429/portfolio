<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profiles;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\ProfilesHistories;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('admin.profile.index', ['user' => $user]);
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('admin.profile.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $auth_user = Auth::user();
        $user = User::find($auth_user['id']);
        if ($user) {
            // $this->validate($request, Episode::$rules);
            $posts = $request->all();
            unset($posts['_token']);
            $user->fill($posts)->save();
            return redirect(route('admin.profile.index'));
        }
    }

}
