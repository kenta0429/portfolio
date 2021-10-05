@extends('layouts.admin')

@section('title', '投稿小説')

@section('content')
<div class="container">
  <h2>投稿小説</h2>
  <div>
    <form action="{{route('admin.novel.update', ['id' => $novel->id])}}" method="post">
      @csrf

      <table class="table">
        <tr>
          <td><input type="text" name="title" value="{{$novel['title']}}" class="form-control"></td>
        </tr>
        <tr>
          <td><textarea name="summary" class="form-control" rows="5">{{$novel['summary']}}</textarea></td>
        </tr>
      </table>
      <button class="btn btn-primary">更新</button>
      <a href="{{route('admin.novel')}}" class="btn btn-outline-primary">戻る</a>
    </form>
  </div>
</div>
@endsection