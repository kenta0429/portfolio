@extends('layouts.admin')


@section('title', '新規小説作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>新規小説作成</h2>
      <form action="" method="post" enctype="multipart/form-data">
@csrf
        <div class="form-group row">
          <label class="col-md-2" for="name">章名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>

        <button class="btn btn-primary">更新</button>
        <a href="{{route('admin.chapter', ['novel_id' => $novel->id])}}" class="btn btn-outline-primary">戻る</a>
      </form>
    </div>
  </div>
</div>
@endsection