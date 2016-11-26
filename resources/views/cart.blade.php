@extends('app')

@section('title','MyCart')
@section('link','')
@section('script','')

@section('content')
  <main class="container">
    @if(!empty($cart))
      @foreach ($cart as $key => $value)
        <div class="row">
          @foreach ($value as $innerkey => $innervalue)
            <div class="col s12 m3">
              <div class="card small">
                <div class="card-image white">
                  <img src="/img/{{$innervalue->img_url}}" height="170">
                </div>
                <div class="card-content">
                  <p>{{$innervalue->name}}</p>
                  <p>¥{{$innervalue->price}}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    @endif
  </main>
@endsection
