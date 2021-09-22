@extends('layouts.admin')

@section('title', '投稿小説')

@section('content')
<div class="container">
  <h2>投稿小説</h2>
  <a href="{{ route('admin.novel.add')}}" class="btn btn-primary">新規作成</a>
  <div>
    <table class="table table-striped">
      @foreach ($novels as $novel)
      <tr>
        <td>{{$novel['title']}}</td>
        <td>{{$novel['summary']}}</td>
        <td><a href="{{ route('admin.novel.add')}}" class="btn btn-primary">編集</a></td>
        <td><a href="{{ route('admin.novel.add')}}" class="btn btn-primary">削除</a></td>
      </tr>
    @endforeach
    </table>
  </div>
</div>
@endsection