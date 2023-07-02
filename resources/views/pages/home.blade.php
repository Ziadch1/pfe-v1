@extends('layouts.master')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .swiper-container {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #categories {
            text-align: center;
            padding: 20px;
            background-color: #fff;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            width: 300px;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .card-button {
            margin-top: 10px;
        }

        .card-button button {
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card-button button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/slider/slider-5.png') }}" alt="Image 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/slider/slider-5.png') }}" alt="Image 2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/slider/slider-5.png') }}" alt="Image 3">
            </div>
            <!-- Add more slides as needed -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <script src="{{ asset('app.js') }}"></script>
    </div>

    <div id="categories">
        <h1>Categories</h1>

        <div class="cards">
            <div class="card">
                <a href="/pcportable">
                    <img class="card-img-top" src="{{ asset('images/categories/laptop (2).png') }}" alt="Card image">
                </a>
                <div class="card-button">
                    <a href="/pcportable"><button>Acheter</button></a>
                </div>
            </div>
            <div class="card">
                <a href="/pcgamer">
                    <img class="card-img-top" src="{{ asset('images/categories/pc.png') }}" alt="Card image">
                </a>
                <div class="card-button">
                    <a href="/pcgamer"><button>Acheter</button></a>
                </div>
            </div>
            <div class="card">
                <a href="/accessoire">
                    <img class="card-img-top" src="{{ asset('images/categories/acse.png') }}" alt="Card image">
                </a>
                <div class="card-button">
                    <a href="/accessoire"><button>Acheter</button></a>
                </div>
            </div>
            <div class="card">
                <a href="/monitors">
                    <img class="card-img-top" src="{{ asset('images/categories/bureau (2).png') }}" alt="Card image">
                </a>
                <div class="card-button">
                    <a href="/monitors"><button>Acheter</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>

</html>

