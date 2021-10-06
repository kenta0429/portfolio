@extends('layouts.front')

@section('content')
<div class="l-header">
  <div class="p-main-nav">
    <ul class="p-main-nav__list">
      <li class="p-main-nav__item">
        <a href="//syosetu.com/favnovelmain/list/">
          <span class="p-icon p-icon--bookmark" aria-hidden="true"></span>
          <span class="p-main-nav__item-name">新着</span>
        </a>
      </li>
      <li class="p-main-nav__item">
        <a href="/novelrireki/list/">
          <span class="p-icon p-icon--watch" aria-hidden="true"></span>
          <span class="p-main-nav__item-name">閲覧履歴</span>
        </a>
      </li>
      <li class="p-main-nav__item">
        <a href="/novelsearch.php">
          <span class="p-icon p-icon--search" aria-hidden="true"></span>
          <span class="p-main-nav__item-name">小説検索</span>
        </a>
      </li>
      <li class="p-main-nav__item p-main-nav__item--useradd">
        <a href="/">
          <span class="p-icon p-icon--user" aria-hidden="true"></span>
          <span class="p-main-nav__item-name">ユーザ登録</span>
        </a>
      </li>
    </ul>
  </div>
</div><!-- .l-header -->
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