@extends('layouts.front')
@section('content')
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
      <a href="//ssl.syosetu.com/useradd/mailinput/">
        <span class="p-icon p-icon--user" aria-hidden="true"></span>
        <span class="p-main-nav__item-name">ユーザ登録</span>
      </a>
    </li>
  </ul>
</div>
</div><!-- .l-header -->
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
          <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false">
          </div>
        </div>
      </div>
      <div class="episodes">
        <h3></h3>
        <table class="table table-striped">
          @foreach ($episodes as $episode)
          <div class="content-title">
            <h3 class="title">
              <a href="{{ route('chapter', ['episode_id' => $episode['id']])}}">{{$episode['subtitle']}}</a>
            </h3>
          </div>
          <div>
            <div class="other">
              <span class="updated">
                更新日 {{$episode['updated_at']}} </span>
              <span class="created">
                <br>作成日 {{$episode['created_at']}} </span>
            </div>
            @endforeach
        </table>
      </div>
    </div>
  </div>
  @endsection