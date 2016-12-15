@extends('app')

@section('title','BuyPage')
@section('link','buy.css')
@section('script','buy.js')

@section('content')
    <main class="container">
        <h3>お届け先入力</h3>
        <div class="row">
            <form action="/buy" class="col s12" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="name" required>
                        <label for="name">氏名</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <select id="birth-year" name="birth_year" required>
                            @foreach(range(1900,2100) as $value)
                                <option value="{{$value}}" @if($value == 2000) selected @endif >{{$value}}</option>
                            @endforeach
                        </select>
                        <label for="birth-year">生年月日　年</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="birth-month" name="birth_month" required>
                            @foreach(range(1,12) as $value)
                                <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                        </select>
                        <label for="birth-month">月</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="birth-day" name="birth_day" required>
                            @foreach(range(1,31) as $value)
                                <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                        </select>
                        <label for="birth-day">日</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <select name="sex" id="sex" required>
                            <option value="1">男性</option>
                            <option value="2">女性</option>
                        </select>
                        <label for="sex">性別</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input id="post-num" type="text" name="post_num" required>
                        <label for="post-num">郵便番号</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" name="address" required>
                        <label for="address">住所</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone" type="text" name="phone" required>
                        <label for="phone">電話番号</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" required>
                        <label for="email">メールアドレス</label>
                    </div>
                </div>

                @foreach($cart as $key => $value)
                    @foreach($value as $ItemName => $in_value)
                        <div class="row grey lighten-4 itemlist">
                            <div class="col s6">
                                <div class="card">
                                    <div class="card-content left">{{$in_value->name}}</div>
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="card">
                                    <div class="card-content right">¥ {{$in_value->price}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                <div class="row grey lighten-3 sumprice">
                    <div class="col s6">
                        <div class="card">
                            <div class="card-content left">合計金額</div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card">
                            <div class="card-content right"> ¥ {{$allsumprice}}</div>
                        </div>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit">確定
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>

    </main>
@endsection
