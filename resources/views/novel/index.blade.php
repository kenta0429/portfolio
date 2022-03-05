@extends('layouts.front')

@section('content')
<div class="content-main">
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

    <div class="other">
      <span class="updated">更新日 {{$novel->updated_at->format('Y-m-d H:i')}}</span>
      <span class="created">作成日 {{$novel->created_at->format('Y-m-d H:i')}}</span>
    </div>
    @endforeach
  </div>
  @endsection