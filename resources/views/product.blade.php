@extends('app')

@section('title','Costmize')
@section('link','product.css')
@section('script','')

@section('content')
  <main class="container">

    <form action="/product" method="post">

      <h3>RaspberryPI</h3>
      <div class="row">
        @foreach ($raspi as $key => $value)

          <div class="col s12 m3">
            <div class="card small">
              <div class="card-image white">
                <img src="/img/{{$value->img_url}}" height="170">
              </div>
              <div class="card-content">
                <p>{{$value->name}}</p>
                <p>¥{{$value->price}}</p>
              </div>
              <div class="card-action">
                <input type="radio" name="raspi" id="raspi{{$key}}">
                <label for="raspi{{$key}}">Select</label>
              </div>
            </div>
          </div>

        @endforeach
      </div>

      <h3>OS</h3>
      <div class="row">
        @foreach ($os as $key => $value)

          <div class="col s12 m3">
            <div class="card small">
              <div class="card-image white">
                <img src="/img/os/{{$value->img_url}}" height="180">
              </div>
              <div class="card-content">
                <p>{{$value->name}}</p>
              </div>
              <div class="card-action">
                <input type="radio" name="os" id="os{{$key}}">
                <label for="os{{$key}}">Select</label>
              </div>
            </div>
          </div>

        @endforeach
      </div>

      <h3>ストレージ</h3>
      <div class="row">
        @foreach ($sdcard as $key => $value)

          <div class="col s12 m2">
            <div class="card small">
              <div class="card-image white">
                <img src="/img/SDcard/{{$value->img_url}}" height="140">
              </div>
              <div class="card-content">
                <p>{{$value->name}}</p>
                <p>¥{{$value->price}}</p>
              </div>
              <div class="card-action">
                <input type="radio" name="sdcard" id="sdcard{{$key}}">
                <label for="sdcard{{$key}}">Select</label>
              </div>
            </div>
          </div>

        @endforeach
      </div>

    </form>

  </main>
@endsection
