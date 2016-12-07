@extends('app')

@section('title','MyCart')
@section('link','cart.css')
@section('script','')

@section('content')
    <main class="container">
        <h3>Cart</h3>
        @if(!empty($cart))
            @foreach ($cart as $key => $value)
                <div class="row grey lighten-4">
                    <div class="col s3 m1">
                        <div class="card small z-depth-0 grey lighten-4">
                            <div class="card-content itemnum">
                                <p>{{$key + 1}}</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($value as $innerkey => $innervalue)
                        <div class="col s3 m3">
                            <div class="card small">
                                <div class="card-image">
                                    <div class="image-inner"
                                         style="background-image: url('/img/{{$innervalue->img_url}}')"></div>
                                </div>
                                <div class="card-content">
                                    <p>{{$innervalue->name}}</p>
                                    <p style="font-size: 25px;">¥ {{$innervalue->price}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col s3 m2">
                        <div class="card small z-depth-0 grey lighten-4">
                            <div class="card-content itemsum">
                                <p>小計</p>
                                <p>¥ {{$sumprice[$key]}}</p>
                                <p><br><br></p>
                                <p><a href="/cart/{{$key}}/delete" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row allsumtext grey lighten-4">
                <div class="col s3 m6">
                    <div class="card">
                        <div class="card-content left">
                            <p class="allsumtext">合計</p>
                        </div>
                    </div>
                </div>
                <div class="col s3 m6">
                    <div class="card">
                        <div class="card-content right">
                            <p class="allsumtext">¥ {{$allsumprice}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection
