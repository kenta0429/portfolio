<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="40万以上のオンライン小説、携帯小説を掲載している投稿型の小説サイトです。小説検索、小説評価、ルビ・縦書き対応、高機能小説執筆機能など">
<meta name="keywords" content="携帯小説,ケータイ小説,オンライン小説,縦書き小説,小説投稿,小説投稿サイト">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=1088, maximum-scale=1.0, user-scalable=yes">

<title>偽小説</title>

<link rel="shortcut icon" href="https://static.syosetu.com/sub/yomouview/images/yomou.ico">
<link rel="apple-touch-icon-precomposed"
  href="https://static.syosetu.com/sub/yomouview/images/apple-touch-icon-precomposed.png?ojjr8y">

<link rel="alternate" type="application/atom+xml" href="https://api.syosetu.com/allnovel.Atom" title="Atom">
<link rel="stylesheet" href="https://static.syosetu.com/sub/yomouview/css/base_yomou-pc.css?qugxcw">

<link rel="stylesheet" href="https://static.syosetu.com/sub/yomouview/css/p_common-pc.css?qvr790">
<link rel="stylesheet" href="https://static.syosetu.com/sub/yomouview/css/trad/base.css?qugxcx">
<link rel="stylesheet" href="https://static.syosetu.com/sub/yomouview/css/trad/second.css?qugxcx">
<link rel="stylesheet" href="https://static.syosetu.com/sub/yomouview/css/trad/rank.css?qugxcx">
<script src="https://static.syosetu.com/view/js/lib/jquery/1.12.4/jquery.min.js?oks8j8"></script>
<link rel="stylesheet" href="https://static.syosetu.com/view/css/lib/jqueryui/1.12.1/jquery-ui.min.css?oks8j8">
<script src="https://static.syosetu.com/view/js/lib/jqueryui/1.12.1/jquery-ui.min.js?oks8j8"></script>
<script src="https://static.syosetu.com/view/js/lib/jquery.hina.js?oyez8w"></script>
<script src="https://static.syosetu.com/view/js/event/global_menu.js?psawph"></script>
<script src="https://static.syosetu.com/sub/yomouview/js/global_menu.js?psawph"></script>
<script src="https://static.syosetu.com/sub/yomouview/js/check_text.js?owywu2"></script>
<script src="https://static.syosetu.com/view/js/smp_toggle.js?qsxen2"></script>
<script type="text/javascript">
  var microadCompass = microadCompass || {};
        microadCompass.queue = microadCompass.queue || [];
</script>
<script type="text/javascript" charset="UTF-8" src="//j.microad.net/js/compass.js"
  onload="new microadCompass.AdInitializer().initialize();" async></script>
</head>

<body>
  <div id="app">

    <div class="p-header">
      <div class="p-header__inner">
        <h1 class="p-header__logo">
          <a href="/novel"><img src="//static.syosetu.com/view/images/common/logo_yomou.png" alt="小説を読もう！"></a>
        </h1>
        <div class="p-header__description">
          小説を読もう！は｢小説家になろう｣に投稿された<br>
          Web小説<span class="p-header__count">899,350</span>作品を無料で読める・探せるサイトです。
        </div>
        <div class="p-header__subnav">
          <ul class="p-header__subnav-list">
            <li class="p-header__subnav-item">
              <a href="//syosetu.com/site/about/"><span class="p-icon p-icon--wakaba"
                  aria-hidden="true"></span>初めての方へ</a>
            </li>
            <li class="p-header__subnav-item">
              <a href="//syosetu.com/site/man/"><span class="p-icon p-icon--question"
                  aria-hidden="true"></span>マニュアル</a>
            </li>
            <li class="p-header__subnav-item">
              <a href="//ssl.syosetu.com/login/input/"><span class="p-icon p-icon--login"
                  aria-hidden="true"></span>ログイン</a>
            </li>
            <li class="p-header__subnav-item p-header__subnav-item--site">
              <a href="//syosetu.com/"><img src="//static.syosetu.com/view/images/common/logo_narou.png"
                  alt="小説家になろう"></a>
            </li>
          </ul>
          <form class="c-form p-header__search js-quick-search" action="/novelsearch.php">
            <div class="c-form__quicksearch">
              <select class="c-form__select c-form__select--accent" name="search_type">
                <option value="novel">小説</option>
                <option value="user">ユーザ</option>
              </select>
              <input class="c-form__quicksearch-text" type="text" name="word" placeholder="小説を検索">
              <button class="c-form__quicksearch-button" type="submit" name="button"><span class="p-icon p-icon--search"
                  aria-label="検索"></span></button>
            </div>
          </form>
        </div>
      </div><!-- /.p-header__inner -->
    </div><!-- /.p-header -->

    <main class="container">
      @yield('content')
    </main>

    <div id="footer">
      <div class="upper"><a href="#">▲ページの上部へ</a></div>
      <ul>
        <li><a href="https://syosetu.com/site/man/">各種マニュアル</a></li>
        <li><a href="https://syosetu.com/help/top/">ヘルプ</a></li>
        <li><a href="https://syosetu.com/site/guideline/">ガイドライン</a></li>
        <li><a href="https://syosetu.com/site/rule/">利用規約</a></li>
        <li><a href="https://syosetu.com/site/privacy/">プライバシーポリシー</a></li>
        <li><a href="https://ssl.syosetu.com/inquire/input/">お問い合わせ</a></li>
        <li><a href="https://dev.syosetu.com/" target="_blank">なろうデベロッパー</a></li>
      </ul>
      <div id="copyright"><a href="https://hinaproject.co.jp/">HINAproject Inc.</a></div>
    </div>
  </div>
</body>

</html>