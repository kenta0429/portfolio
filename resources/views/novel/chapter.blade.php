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
            <div class="fb-like" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
              data-share="false">
            </div>
          </div>

        </div>

        <div class="episodes">
          <h3></h3>

          <div class="episode ">
            <a href="/novel/10/4">
              <span class="title"><span class="bookmark-dummy"></span>プロローグ　クラリス視点</span>
              <span class="open-date">
                2021.08.22 20:55 </span>
              <span class="counter">
                1,535文字
              </span>
            </a>
          </div>

          <div class="episode ">
            <a href="/novel/10/5">
              <span class="title"><span class="bookmark-dummy"></span>第１話　騒然となる会場　クラリス視点</span>
              <span class="open-date">
                2021.08.23 07:50 </span>
              <span class="counter">
                1,225文字
              </span>
            </a>
          </div>

          <div class="episode ">
            <a href="/novel/10/6">
              <span class="title"><span class="bookmark-dummy"></span>第２話　事件翌日の出来事～知らせ～　ジェラール視点（１）</span>
              <span class="open-date">
                2021.08.24 07:50 </span>
              <span class="counter">
                960文字
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endsection