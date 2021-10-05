@extends('layouts.admin')

@section('title', '投稿小説')

@section('content')
<div class="container">
  <h2>エピソード</h2>
  <div>
    <form action="{{route('admin.episode.update', ['episode_id' => $episode->id])}}" method="post">
      @csrf
      <input type="hidden" name="novel_id" value="{{$episode['novel_id']}}">
      <div class="form-group row">
        <label class="col-md-2" for="name">エピソード</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="name" value="{{ $episode['chapter_name'] }}">
        </div>
        <label class="col-md-2" for="name">タイトル</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="title" value="{{ $episode['subtitle'] }}">
        </div>
        <label class="col-md-2" for="name">本文</label>
        <div class="col-md-10">
          <textarea name="content" rows="10" class="form-control">{{ $episode['content'] }}</textarea>
        </div>
      </div>
      <button class="btn btn-primary">更新</button>
      <a href="{{route('admin.episode', ['novel_id' => $novel->id])}}" class="btn btn-outline-primary">戻る</a>
    </form>
  </div>
</div>
@endsection