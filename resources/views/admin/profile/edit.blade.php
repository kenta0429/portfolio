@extends('layouts.admin')

@section('title', 'プロファイル編集')

@section('content')
<div class="container">
  <h2>エピソード</h2>
  <div>
    <form action="{{route('admin.profile.update')}}" method="post">
      @csrf
      <div class="form-group row">
        <label class="col-md-2" for="name">名前</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="name" value="{{ $user['name'] }}">
        </div>
        <label class="col-md-2" for="name">かな</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="ruby_name" value="{{ $user['ruby_name'] }}">
        </div>
        <label class="col-md-2" for="name">自己紹介</label>
        <div class="col-md-10">
          <textarea name="profile" rows="10" class="form-control">{{ $user['profile'] }}</textarea>
        </div>
      </div>
      <button class="btn btn-primary">更新</button>
      <a href="{{route('admin.profile.index')}}" class="btn btn-outline-primary">戻る</a>
    </form>
  </div>
</div>
@endsection