<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="40万以上のオンライン小説、携帯小説を掲載している投稿型の小説サイトです。小説検索、小説評価、ルビ・縦書き対応、高機能小説執筆機能など">
<meta name="keywords" content="携帯小説,ケータイ小説,オンライン小説,縦書き小説,小説投稿,小説投稿サイト">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1088, maximum-scale=1.0, user-scalable=yes">

<title>偽小説</title>

<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="/novel">小説を読もう</a>
      </h1>
      <div class="p-header__description">
        小説を読もう！は｢小説家になろう｣に投稿された<br>
        Web小説<span class="p-header__count">899,350</span>作品を無料で読める・探せるサイトです。
      </div>
    </div>
    <div>
      <a href="{{ route('novel')}}">小説一覧</a>
    </div>
  </div>

  <div id="app">
    <main class="container">
      @yield('content')
    </main>

    <div id="footer">
      <div class="upper"><a href="#">▲ページの上部へ</a></div>
      <ul>
        <li><a href="https://syosetu.com/site/man/">各種マニュアル</a></li>
        <li><a href="https://syosetu.com/help/top/">ヘルプ</a></li>
        <li><a href="https://syosetu.com/site/guideline/">ガイドライン</a></li>
        <li><a href="https://syosetu.com/site/rule/">利用規約</a></li>
        <li><a href="https://syosetu.com/site/privacy/">プライバシーポリシー</a></li>
        <li><a href="https://ssl.syosetu.com/inquire/input/">お問い合わせ</a></li>
        <li><a href="https://dev.syosetu.com/" target="_blank">なろうデベロッパー</a></li>
      </ul>
      <div id="copyright"><a href="https://hinaproject.co.jp/">HINAproject Inc.</a></div>
    </div>
  </div>
</body>

</html>