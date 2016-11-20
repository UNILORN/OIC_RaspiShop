<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - RaspiShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/@yield('link')" media="screen" title="no title">
    <script src="/js/@yield('script')"></script>
  </head>
  <body>
    <header>
      <nav class="blue darken-2">
        <div class="nav-wrapper container">
          <a href="/" class="left brand-logo"><img src="/img/logo.png" height="64"/></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if(Auth::check())
              <li><a href="/mypage">{{Auth::user()->name}}</a></li>
              <li><a href="/logout">ログアウト</a></li>
            @else
              <li><a href="/login">ログイン</a></li>
              <li><a href="/register">新規登録</a></li>
            @endif
          </ul>
        </div>
      </nav>

    </header>

    @yield('content')

    <footer class="page-footer blue-grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text" style="font-size:20px;">ご利用される方へ</h5>
            <p class="grey-text text-lighten-4" style="font-size:13px;">このサイトは授業提出用に作成した作品です。</p>
            <p class="grey-text text-lighten-4" style="font-size:13px;">Authなどの機能のセキュリティは全て保証されません。データが沢山流出しますのでご注意ください。</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Google+</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2016 Copyright UNILORN
        <a class="right" href="/"><img src="/img/logo.png" height="60"/></a>
        </div>
      </div>
    </footer>


  </body>
</html>
