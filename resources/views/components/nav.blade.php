
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('novel')}}">小説一覧</a>
          </li>
          @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">新規登録</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">ログイン</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.novel') }}">小説投稿</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
      </div>
      @endif
      </ul>
    </div>
  </nav>