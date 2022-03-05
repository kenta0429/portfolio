<div id="header" class="container p-3">
  <div class="row">
    <div class="col-8">
      <div class="row">
        <h1 class="logo">
          <a href="/">小説投稿サイト</a>
        </h1>
        <div class="description">
          小説投稿サイト<br>
          Web小説を読めるサイトです。
        </div>
      </div>
    </div>

    <div class="col-4">
      <form action="{{route('novel')}}" method="get">
        @csrf
        <div class="form-inline">
          <input type="text" class="form-control" name="keyword" value="{{ @$keyword }}">
          <button class="btn btn-outline-primary">検索</button>
        </div>
      </form>
    </div>
  </div>
</div>