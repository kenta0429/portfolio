<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="オンライン小説">
<meta name="keywords" content="小説">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1088, maximum-scale=1.0, user-scalable=yes">

<title>{{ config('app.name', '小説投稿サイト') }}</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">

    @include('components.header')
    @include('components.nav')

   

  

 


<!--novel_bn-->
<a href="{{route('chapter', ['novel_id' => $novel->id])}}">エピソード一覧</a>
<br>作成日：{{ $episode->created_at }}　更新日：{{ $episode->updated_at }}

<h2 class="h2">{{ $episode['subtitle']}}</h2>
<div id="novel_honbun" class="novel_view">
  {!! nl2br($episode['content']) !!}
</div>

<div class="novel_bn">
  <a href="{{route('chapter', ['novel_id' => $novel->id])}}">エピソード一覧</a>
</div>

</div>
<!--novel_color-->
<main class="container">
      @yield('content')

      <div class="upper"><p style="text-align: right"><a href="#">▲ページの上部へ</a></p></div>
    </main>

@include('components.footer')
</div>
</body>

</html>