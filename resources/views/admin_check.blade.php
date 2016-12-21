<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者画面 - RaspiShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet"/>
    {{--<link rel="stylesheet" href="/css/app.css" media="screen" title="no title">--}}
    <link rel="stylesheet" href="/css/@yield('link')" media="screen" title="no title">
    <script src="/js/@yield('script')"></script>
</head>
<body>
<main class="container">
    <h4>管理者のパスコードを入力</h4>
    <form action="/admin" class="form-control" method="post">
        {{csrf_field()}}
        <input type="text" name="pass" class="form-control" placeholder="パスコード" required>
        <input type="submit" class="form-control">
    </form>
</main>



</body>
</html>
