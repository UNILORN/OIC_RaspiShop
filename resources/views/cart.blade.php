@extends('app')

@section('title','MyCart')
@section('link','cart.css')
@section('script','')

@section('content')
    <main class="container">
        <h3>Cart</h3>
        @if(!empty($cart))
            @foreach ($cart as $key => $value)
                <div class="row">
                    <div class="col s3 m1">
                        {{$key + 1}}
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
                                    <p>¥{{$innervalue->price}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col s3 m1">
                        {{$sumprice[$key]}}
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col s3 m12">
                    {{$allsumprice}}
                </div>
            </div>
        @endif
    </main>
@endsection
