@extends('layouts.admin')

@section('title', '投稿小説')

@section('content')
<div class="container">
  <h2>投稿小説</h2>
  <div>
    <form action="{{route('admin.novel.update', ['id' => $novel->id])}}" method="post">
      @csrf

      <div class="form-group row">
        <label class="col-md-2" for="is_publish">公開</label>
        <div class="col-md-10">
          <input type="radio" class="form-radio" name="is_publish" value="1">
          <label for="">公開</label>

          <input type="radio" class="form-radio" name="is_publish" value="0">
          <label for="">非公開</label>
        </div>
      </div>

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

    <div class="mt-3">
      <form action="{{ route('admin.novel.delete', ['id' => $novel['id']]) }}" method="post">
        @csrf
        <button class="btn btn-danger" onclick="return confirm('削除しますか？')">削除</button>
      </form>
    </div>
  </div>
</div>
@endsection