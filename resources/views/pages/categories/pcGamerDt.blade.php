


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .product-container {
            display: flex;
            align-items: center;
            justify-content: center; /* Center the content horizontally */
        }

        .image-container {
            flex-basis: 45%;
            max-width: 45%;
        }

        img.card-img-top {
            width: 80%;
            height: auto;
            max-height: 600px; /* Set a maximum height for the image */
        }

        .content-container {
            flex-grow: 1;
            padding-left: 20px;
            width: 50%;
            margin-top: -180px;
        }

        h1 {
            margin: 0; /* Remove default margin */
        }

        .discount {
            text-decoration: line-through;
            color: red;
            margin-bottom: 10px;
        }

        .price {
            color: green;
            font-weight: 700;
            font-size: 24px; /* Increase font size for better visibility */
        }

        #desc {
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px; /* Add padding for better readability */
        }

        p {
            font-size: 18px; /* Decrease font size for better readability */
            font-family: serif;
            text-align: justify; /* Justify the text to improve readability */
            margin-bottom: 10px; /* Add spacing between paragraphs */
        }

        #desc-h {
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px;
            font-size: 20px; /* Increase font size for better visibility */
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="product-container">
        <div class="image-container">
            <img src="{{ asset('images/categories/pcgamer/' . $product->img) }}" class="card-img-top"
                alt="Product Image">
        </div>
        <div class="content-container">
            <h1>{{$product->title}}</h1>
            <p class="discount">-15% <span>{{$product->prix+15*$product->prix/100}} DH</span></p>
            <p class="price">Prix: {{$product->prix}} DH</p>
            <div id="desc">
                <span id="desc-h">Description</span>
                <p>{{$product->description}}</p>
            </div>
            <br>
            <button>Add to Cart</button>
        </div>
    </div>
</body>

</html>

