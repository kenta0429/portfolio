@extends('layouts.admin')
@section('title', '登録済みプロフィール')

@section('content')
<div class="container">
  <h2>プロフィール</h2>
  <div class="row">
    <div class="admin-news col-md-12 mx-auto">
      <div>
        <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">編集</a>
      </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="20%">名前</th>
              <th width="10%">かな</th>
              <th width="30%">自己紹介</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->ruby_name }}</td>
              <td>{{ $user->profile }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection