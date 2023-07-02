
@extends('layouts.navbar')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" /> --}}
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-shopping-carts.min.css" />  <!-- Start your project here-->
  <style>
    @media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }

    .card-registration .select-arrow {
    top: 13px;
    }

    .bg-grey {
    background-color: #eae8e8;
    }

    @media (min-width: 992px) {
    .card-registration-2 .bg-grey {
    border-top-right-radius: 16px;
    border-bottom-right-radius: 16px;
    }
    }

    @media (max-width: 991px) {
    .card-registration-2 .bg-grey {
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    }
    }
  </style> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

      <br>
      <div class="container">
          <table class="table">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Prix</th>
                      <th>Quantity</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($products as $product)
                      <tr>
                          <td><img src="{{ asset('images/categories/pcgamer/' . $product->img) }}" alt="" width="100" height="100"></td>
                          <td>{{ $product->title }}</td>
                          <td class="price">{{ $product->prix }}DH</td>
                          <td>
                              <div class="input-group">
                                  <button class="btn btn-link px-2 quantity-button" data-change="-1" data-index="{{ $loop->index }}">-</button>
                                  <input type="number" class="form-control quantity-input" value="0" min="1">
                                  <button class="btn btn-link px-2 quantity-button" data-change="1" data-index="{{ $loop->index }}">+</button>
                              </div>
                          </td>
                          <td>
                              <button class="btn btn-danger">Delete</button>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <script>
          // Get all the quantity buttons and input fields
          const quantityButtons = document.querySelectorAll('.quantity-button');
          const quantityInputs = document.querySelectorAll('.quantity-input');
          const priceElements = document.querySelectorAll('.price');

          // Add event listeners to the quantity buttons
          quantityButtons.forEach((button, index) => {
              button.addEventListener('click', () => {
                  // Get the current quantity value
                  let quantity = parseInt(quantityInputs[index].value);

                  // Get the price of the product
                  let price = parseFloat(priceElements[index].textContent.replace('DH', ''));

                  // Get the value to change the quantity by
                  let change = parseInt(button.getAttribute('data-change'));

                  // Update the quantity value
                  quantity += change;
                  quantity = Math.max(1, quantity);

                  // Update the input field with the new quantity
                  quantityInputs[index].value = quantity;

                  // Update the total price based on the quantity change
                  let totalPrice = (price * quantity).toFixed(2);
                  priceElements[index].textContent = totalPrice + 'DH';
              });
          });
      </script>
  @endsection
</body>
</html>
@extends('layouts.footer')