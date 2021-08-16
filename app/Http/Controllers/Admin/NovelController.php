<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NovelController extends Controller
{
    public function add()
{
    return view('admin.novel.create');
}

public function create()
{
    return redirect('admin/novel/create');
}

public function edit()
{
    return view('admin.novel.edit');
}

public function update()
{
    return redirect('admin/novel/edit');
}
}
