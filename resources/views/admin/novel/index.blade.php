@extends('layouts.admin')

@section('title', '小説一覧')

@section('content')
<div class="container">
  <h2>投稿小説一覧</h2>
  <a href="{{ route('admin.novel.add')}}" class="btn btn-primary">新規作成</a>
  <div>
    <table class="table table-striped">
      @foreach ($novels as $novel)
      <tr>
        <td><a href="{{ route('admin.episode', ['novel_id' => $novel['id']])}}">{{$novel['title']}}</a></td>
        <td>{{$novel['summary']}}</td>
        <td><a href="{{ route('admin.novel.edit', ['novel_id' => $novel['id']])}}" class="btn btn-primary">編集</a></td>
        <td><a href="{{ route('admin.novel.delete')}}" class="btn btn-primary">削除</a></td>
      </tr>
    @endforeach
    </table>
  </div>
</div>
@endsection