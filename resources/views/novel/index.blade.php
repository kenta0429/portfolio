@extends('layouts.front')

@section('content')
<div class="content-main">
<h2 class="h2">小説一覧</h2>
  @foreach ($novels as $novel)
  <div class="content-title">
    <h3 class="title">
      <a href="{{ route('chapter', ['novel_id' => $novel['id']])}}">{{$novel['title']}}</a>
    </h3>
  </div>
  <div>
    <div class="author">
      作者：
      <a href="{{ route('writer', ['novel_id' => $novel['user_id']])}}">{{$novel->user->name}}({{$novel->user->ruby_name}})</a>
    </div>
    <div class="abstract">
      あらすじ：
      <div class="details ReadMore">
        <div class="summary">
          {{ $novel['summary'] }}
        </div>
      </div>
    </div>

  
    @endforeach
  </div>
  @endsection