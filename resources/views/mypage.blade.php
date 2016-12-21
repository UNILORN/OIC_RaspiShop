@extends('app')

@section('title','MyPage')
@section('link','')
@section('script','')

@section('content')
  <main class="container">
    <h3>購入履歴</h3>
    <table class="striped">
      <thead>
      <tr>
        <th data-field="id">注文NO</th>
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
  </main>
@endsection
