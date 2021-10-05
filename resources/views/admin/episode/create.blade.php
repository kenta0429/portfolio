@extends('layouts.admin')


@section('title', '新規小説作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>新規エピソード作成</h2>
      <form action="{{route('admin.episode.create', ['novel_id' => $novel->id])}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="novel_id" value="{{$novel['id']}}">
        <div class="form-group row">
          <label class="col-md-2" for="name">章名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="chapter_name" value="{{ old('chapter_name') }}">
          </div>
          <label class="col-md-2" for="name">サブタイトル</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
          </div>
          <label class="col-md-2" for="name">本文</label>
          <div class="col-md-10">
            <textarea name="content" rows="10" class="form-control" name="content" value="{{ old('content') }}">
            </textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
        <a href="{{route('admin.episode', ['novel_id' => $novel->id])}}" class="btn btn-outline-primary">戻る</a>
      </form>
    </div>
  </div>
</div>
@endsection