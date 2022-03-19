@extends('layouts.front')

@section('content')
<div class="content-main">
  <h2 class="h2">新着</h2>
  @foreach ($novels as $novel)
  <p>
    <a href="{{ route('chapter', ['novel_id' => $novel['id']])}}">{{$novel['title']}}</a>
    作者：
    <a href="{{ route('writer', ['novel_id' => $novel['user_id']])}}">{{$novel->user->name}}</a>
    
  </p>
  @endforeach
</div>
@endsection