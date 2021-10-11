@extends('layouts.front')

@section('content')
<div class="content-main">
  <table class="table table-striped">
    @foreach ($novels as $novel)
    <div class="content-title">
      <h3 class="title">
        <a href="{{ route('chapter', ['novel_id' => $novel['id']])}}">{{$novel['title']}}</a>
      </h3>
    </div>
    <div>
      <div class="author">
        <a href="/writer/1" target="_blank" class="1">氷純</a>
      </div>
      <div class="abstract">
        <div class="details ReadMore">
          <div class="summary">　
            {{$novel['summary']}}
          </div>
        </div>
      </div>
      <div class="other">
        <span class="updated">
          更新日 {{$novel['updated_at']}} </span>
        <span class="created">
          <br>作成日 {{$novel['created_at']}} </span>
      </div>
      @endforeach
  </table>
</div>
@endsection