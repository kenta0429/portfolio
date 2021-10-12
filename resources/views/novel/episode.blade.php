@extends('layouts.front')
@section('content')
<div class="novel_bn">
  <a href="/novel/chapter/episode1">次へ&nbsp;&gt;&gt;</a>
</div>
<!--novel_bn-->
<a href="{{route('chapter', ['novel_id' => $novel->id])}}">エピソード一覧</a>


<h2 class="h2">{{ $episode['subtitle']}}</h2>
<div id="novel_honbun" class="novel_view">
  {!! nl2br($episode['content']) !!}
</div>

<div class="novel_bn">
<a href="{{route('chapter', ['novel_id' => $novel->id])}}">エピソード一覧</a>
</div>

</div>
<!--novel_color-->

@endsection