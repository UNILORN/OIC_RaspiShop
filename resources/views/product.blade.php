@extends('app')

@section('title','Costmize')
@section('link','product.css')
@section('script','product.js')

@section('content')
  <main class="container">

    <ul id="slide-out" class="side-nav">
      <li><a href="#!">Second Link</a></li>
    </ul>

    <form action="/cart" method="post">
      {{csrf_field()}}
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
                <input type="radio" name="raspi" id="raspi{{$key}}" value="{{$value->id}}">
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
                <input type="radio" name="os" id="os{{$key}}" value="{{$value->id}}">
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
                <input type="radio" name="sdcard" id="sdcard{{$key}}" value="{{$value->id}}">
                <label for="sdcard{{$key}}">Select</label>
              </div>
            </div>
          </div>

        @endforeach
      </div>

      <div class="row formfooter z-depth-5 valign-wrapper">
        <div class="container">
          <div class="col s6 valign" id="itemslide">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">payment</i></a>
          </div>
          <div class="col s3 valign"><span class="flow-text right"></span></div>
          <div class="col s3 valign"><input type="submit" class="waves-effect waves-light btn" value="カートに入れる"></div>
        </div>
      </div>
    </form>

  </main>
@endsection
