<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="オンライン小説">
<meta name="keywords" content="小説">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1088, maximum-scale=1.0, user-scalable=yes">

<title>{{ config('app.name', '小説投稿サイト') }}</title>

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link href="{{ mix('css/user.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">

    @include('components.header')
    @include('components.nav')

    <main class="container">
      @yield('content')
      <link rel="stylesheet" href="{{ mix('css/sample.css') }}">
      <div class="upper"><a href="#">▲ページの上部へ</a></div>
    </main>

    @include('components.footer')

  </div>
</body>

</html>