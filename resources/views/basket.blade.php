@extends('layouts.master')

@section('title', 'Basket')

@section('content')
  <h1>Корзина</h1>
  <p>Оформление заказа</p>
  <div class="panel">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Название</th>
          <th>Кол-во</th>
          <th>Цена</th>
          <th>Стоимость</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order->products as $product)
          <tr>
            <td>
              <a href="{{ route('product', [$product->category_id, $product->code]) }}">
                <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                {{ $product->name }}
              </a>
            </td>
            <td>
              <div class="btn-group form-inline">
                <form action="{{ route('basket_remove', $product) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus"
                      aria-hidden="true"></span></button>
                </form>
                <span class="badge">{{ $product->pivot->count }}</span>
                <form action="{{ route('basket_add', $product) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus"
                      aria-hidden="true"></span></button>
                </form>
              </div>
            </td>
            <td>{{ $product->price }} ₽</td>
            <td>{{ $product->getPriceForCount($product->pivot->count) }} ₽</td>
          </tr>
        @endforeach

        <tr>
          <td colspan="3">Общая стоимость:</td>
          <td>{{ $order->getFullPrice() }} ₽</td>
        </tr>
      </tbody>
    </table>
    <br>
    <div class="btn-group pull-right" role="group">
      <a type="button" class="btn btn-success" href="{{ route('basket_place') }}">Оформить заказ</a>
    </div>
  </div>
@endsection
