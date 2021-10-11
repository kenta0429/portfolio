@extends('layouts.front')
@section('content')

<div class="cover novels section">
  <h2 class="h2">作者</h2>
  <p>
    <small>{{$user['ruby_name']}}</small>
  </p>
  <p>{{$user['name']}}</p>

  <h2 class="h2">プロフィール</h2>
  <p>
    {!! nl2br($user['profile']) !!}
  </p>
</div>
@endsection