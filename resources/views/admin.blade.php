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
    <h4>注文表</h4>
    <table class="striped">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="name">氏名</th>
            <th data-field="name">購入商品</th>
            <th data-field="name">購入日</th>
            <th data-field="price">合計金額</th>

        </tr>
        </thead>

        <tbody>
        @foreach($sales as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>
                <ul>
                    @foreach($value->Detail as $in_value)
                        <li>{{$in_value->product_id}} : ¥ {{$in_value->price}}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{$value->created_at}}</td>
            <td>¥ {{$value->sum_price}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$sales->links()}}
</main>



</body>
</html>
