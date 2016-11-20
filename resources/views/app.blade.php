<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - RaspiShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <link rel="stylesheet" href="/css/@yield('link')" media="screen" title="no title">
    <script src="/js/@yield('script')"></script>
  </head>
  <body>
    <header>
      <nav class="teal lighten-2">
        <div class="nav-wrapper container">
          <a href="#" class="left brand-logo">Top</a>
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

    <footer>


    </footer>


  </body>
</html>
