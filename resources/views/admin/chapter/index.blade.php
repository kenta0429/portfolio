@extends('layouts.admin')

@section('title', '投稿小説')

@section('content')
<div class="container">
  <h2>投稿小説</h2>
  <a href="{{ route('admin.novel.add')}}" class="btn btn-primary">新規作成</a>
  <a href="{{route('admin.novel')}}" class="btn btn-outline-primary">戻る</a>
  <div>
    <table class="table table-striped">
      <tr>
        <td>{{$novel['title']}}</td>
        <td>{{$novel['summary']}}</td>
        <td><a href="{{ route('admin.novel.edit', ['novel_id' => $novel['id']])}}" class="btn btn-primary">編集</a></td>
      </tr>
    </table>
  </div>

  <h2>章名</h2>
  <a href="{{ route('admin.chapter.add', ['novel_id' => $novel->id])}}" class="btn btn-primary">新規章作成</a>

</div>
@endsection