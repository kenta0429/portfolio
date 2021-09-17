@extends('layouts.admin')

@section('title', '小説一覧')

@section('content')
<div class="container">
  <a href="{{ route('admin.novel.add')}}" class="btn btn-primary">新規作成</a>
  @foreach ($novels as $novel)
  <div>
    {{$novel['title']}}
  </div>
  @endforeach
</div>
@endsection