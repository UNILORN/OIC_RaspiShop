@extends('app')

@section('title','RaspiShop')
@section('link','top.css')
@section('script','')

@section('content')
  <main>

    <div class="title valign-wrapper">
      <h3 class="valign center-align">あなたに合ったRaspberryPiをお届けします</h3>
    </div>

    <div class="container">

      <div class="row">

        <div class="col s12 m6">
          <div class="card green darken-3">
            <div class="card-image white">
              <img src="/img/os/ubuntu.png">
            </div>
            <div class="card-content white-text">
              <span class="card-title">お好きなカスタマイズが出来ます</span>
              <p>あなたの必要としている性能を選択でき、購入する事が出来ます。</p>
            </div>
            <div class="card-action">
              <a href="/product">今すぐカスタマイズ</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card purple darken-1">
            <div class="card-image">
              <img src="/img/SDcard/SDimage.png">
            </div>
            <div class="card-content white-text">
              <span class="card-title">ストレージ容量も選択可能</span>
              <p>16GBのMicroSDから、128GBまで用意しています。</p>
            </div>
            <div class="card-action">
              <a href="/product">今すぐカスタマイズ</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

@endsection
