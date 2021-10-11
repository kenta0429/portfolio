@extends('layouts.front')
@section('content')
<div class="p-main-nav">
  <div class="cover novels section">
    <div class="content-main">
      <h2 class="title">
        {{$novel['title']}}
      </h2>
      <div class="author">
        <span>
          <a href="/writer/1" target="_blank" class="1">柚木ゆず</a>
        </span>
      </div>
      <h4>あらすじ</h4>
      <div class="abstract">
        {{$novel['summary']}}
      </div>
    </div>
    <div id="ScrollUp" class="table-of-contents novels">
      <div class="head">
        <a class="toc current" href="/novel/5628105/870534004">目次</a>
        <div class="body">
          <div class="nav">
            <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
              data-share="false">
            </div>
          </div>
        </div>
        <div class="episodes">
          <h3></h3>
          <table class="table table-striped">
            @foreach ($episodes as $episode)
            <h3 class="title">
              <a href="{{ route('episode', 
              [
                'novel_id' => $novel['id'],
                'episode_id' => $episode['id'],
              ]
            )}}">{{$episode['subtitle']}}</a>
            </h3>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    @endsection