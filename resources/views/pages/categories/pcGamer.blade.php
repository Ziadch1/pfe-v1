<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .alert {
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 4px;
    }

    .alert-danger {
      background-color: #f8d7da;
      border-color: #f5c6cb;
      color: #721c24;
    }

    .alert-success {
      background-color: #d4edda;
      border-color: #c3e6cb;
      color: #155724;
    }

    .container {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 0 20px;
    }

    .card {
      width: 100%;
      max-width: 300px;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease;
      margin-bottom: 20px;
    }

    .image-container {
      height: 350px;
      overflow: hidden;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .title {
      margin-top: 10px;
      font-size: 18px;
    }

    .price-container {
      margin-top: 10px;
    }

    .price {
      font-weight: bold;
    }

    .last-price {
      text-decoration: line-through;
      color: #888;
      font-size: 14px;
    }

    .increased-price {
      font-size: 14px;
      color: #f00;
    }

    .button-container {
      margin-top: 20px;
    }

    .button-container button {
      padding: 10px 20px;
      margin: 5px;
      font-size: 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button-container button:hover {
      background-color: #45a049;
    }

    /* Media Queries */
    @media (min-width: 576px) {
      .card {
        width: calc(50% - 20px);
        margin-right: 20px;
      }
    }

    @media (min-width: 768px) {
      .card {
        width: calc(33.33% - 20px);
        margin-right: 20px;
      }
    }

    @media (min-width: 992px) {
      .card {
        width: calc(33.33% - 20px);
        margin-right: 20px;
      }
    }
  </style>
</head>

<body>
  @extends('layouts.master')
  {{-- @extends('pages.test') --}}
  @section('content')
  @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif
  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="container">
    @foreach ($pcgamers as $pcgamer)
    <div class="card">
      <div class="image-container">
        <a href="{{ route('detailsP', ['id' => $pcgamer->id]) }}">
          <img src="{{ asset('images/categories/pcgamer/' . $pcgamer->img) }}" alt="Product Image">
        </a>
      </div>
      <h2 class="title">{{ $pcgamer->title }}</h2>
      <div class="price-container">
        <span class="price">{{ $pcgamer->prix }} DH</span>
        @php
        $lastPrice = $pcgamer->prix * 1.15;
        @endphp
        <span class="last-price">Last Price: <span class="increased-price">${{ number_format($lastPrice, 2) }}</span></span>
      </div>
      <div class="button-container">
        @if (Auth::check())
        @if (Auth::user()->type === 'admin')
            <a href="{{ route('admin.edit',$pcgamer->id) }}" class="nav-link">upddate</a>
            <form action="{{ route('admin.destroy', $pcgamer->id) }}" method="post">
              @method('delete')
              @csrf
              <button class="add-to-cart" type="submit">Delete</button>
          </form>
        @else
            <form action="{{ route('panier', $pcgamer->id) }}" method="get">
                @csrf
                <button class="add-to-cart" type="submit">Add to Cart</button>
                <button class="add-to-wishlist">Add to Wishlist</button>
            </form>
        @endif
    @else
        <a href="{{ route('login') }}" class="nav-link">Add to Cart</a>
        <button class="add-to-wishlist">Add to Wishlist</button>
    @endif
        {{-- <form action="{{ route('panier', $pcgamer->id) }}" method="get">
          @csrf
          <button class="add-to-cart" type="submit">Add to Cart</button>
        </form> --}}
        
      </div>
    </div>
    @endforeach
  </div>
  @endsection

</body>

</html>
