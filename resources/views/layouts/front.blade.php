<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="オンライン小説">
<meta name="keywords" content="小説">
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
        小説投稿サイト<br>
        Web小説を読めるサイトです。
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
      
      <div id="copyright">kawakami</div>
    </div>
  </div>
</body>

</html>