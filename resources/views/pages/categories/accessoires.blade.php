{{-- <!DOCTYPE html>
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
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: -10px;
        }

        .col-md-4 {
            padding: 10px;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 272px;
            flex-basis: 30%;
        }

        .card-img-top {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }

        .card-body {
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card1 {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 5px;
            background-color: #f9f9f9;
            margin-bottom: 5px;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .btn {
            display: block;
            background-color: #007bff;
            color: #fff;
            padding: 8px;
            /* width: 100%; */
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @extends('layouts.master')
    @section('content')
        <br>
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
            <div class="row card-container">
                @foreach ($pcgamers as $pcgamer)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('detailsP', ['id' => $pcgamer->id]) }}">
                                <img src="{{ asset('images/categories/pcgamer/' . $pcgamer->img) }}"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $pcgamer->title }}</h5>
                                <div class="card1">
                                    <p class="price">{{ $pcgamer->prix }} DH</p>
                                </div><br>
                                <form action="{{ route('panier', $pcgamer->id) }}" method="get">
                                    @csrf
                                    <button type="submit" class="btn">Ajouter au panier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

</body>

</html> --}}
