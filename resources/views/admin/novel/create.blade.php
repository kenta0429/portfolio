@extends('layouts.admin')


@section('title', '新規小説作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>新規小説作成</h2>
      <form action="{{ action('Admin\NovelController@create') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <input type="hidden" name="user_id" value="{{$user['id']}}">

        <div class="form-group row">
          <label class="col-md-2" for="title">タイトル</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2" for="is_publish">公開</label>
          <div class="col-md-10">
            <input type="radio" class="form-radio" name="is_publish" value="1">
            <label for="">公開</label>

            <input type="radio" class="form-radio" name="is_publish" value="0">
            <label for="">非公開</label>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2" for="body">あらすじ</label>
          <div class="col-md-10">
            <textarea class="form-control" name="summary" rows="20">{{ old('summary') }}</textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection