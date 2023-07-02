<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Navbar Design</title>
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!--===============================================================================================-->	
	    <link rel="icon" type="image/png" href="../../../images/icons/favicon.png"/>
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
	<!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="../../../vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/slick/slick.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="../../../vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	    {{-- <link rel="stylesheet" type="text/css" href="../../../css/util.css"> --}}
	    {{-- <link rel="stylesheet" type="text/css" href="../../../css/main.css"> --}}
	<!--===============================================================================================--> 

{{-- <style>
        .main-navbar {
            border-bottom: 1px solid #ccc;
        }

            .main-navbar .top-navbar {
        background-color: #2874f0;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .main-navbar .top-navbar .brand-name {
        color: #fff;
    }

    .main-navbar .top-navbar .nav-link {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
    }

    .main-navbar .top-navbar .dropdown-menu {
        padding: 0px 0px;
        border-radius: 0px;
    }

    .main-navbar .top-navbar .dropdown-menu .dropdown-item {
        padding: 8px 16px;
        border-bottom: 1px solid #ccc;
        font-size: 14px;
    }

    .main-navbar .top-navbar .dropdown-menu .dropdown-item i {
        width: 20px;
        text-align: center;
        color: #2874f0;
        font-size: 14px;
    }

    .main-navbar .navbar {
        padding: 0px;
        background-color: #ddd;
    }

    .main-navbar .navbar .nav-item .nav-link {
        padding: 8px 20px;
        color: #000;
        font-size: 15px;
    }

    @media only screen and (max-width: 600px) {
        .main-navbar .top-navbar .nav-link {
            font-size: 12px;
            padding: 8px 10px;
        }
    }
</style> --}}
<style>
    /* CSS styles here */
    /* Container Menu Desktop */
    .container-menu-desktop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
      background-color: #ffffff;
      padding: 15px;
      transition: top 0.3s;
    }

    /* Wrap Menu Desktop */
    .wrap-menu-desktop {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    /* Logo */
    .logo {
      display: inline-block;
      margin-right: 15px;
    }

    /* Menu Desktop */
    .menu-desktop {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #ffffff;
    }

    .menu-desktop ul.main-menu {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu-desktop ul.main-menu li {
      display: inline-block;
      position: relative;
    }

    .menu-desktop ul.main-menu li a {
      display: block;
      padding: 10px 15px;
      text-decoration: none;
      color: #333333;
      font-weight: 600;
    }

    .menu-desktop ul.main-menu li.active-menu a {
      color: #ff0000;
    }

    .menu-desktop ul.main-menu li ul.sub-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #ffffff;
      display: none;
      padding: 10px;
    }

    .menu-desktop ul.main-menu li:hover ul.sub-menu {
      display: block;
    }

    .menu-desktop ul.main-menu li ul.sub-menu li {
      display: block;
    }

    .menu-desktop ul.main-menu li ul.sub-menu li a {
      color: #333333;
      padding: 5px 0;
    }

    /* Icon Header */
    .wrap-icon-header {
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }

    .icon-header-item {
      margin: 0 5px;
    }

    /* Sticky Navbar */
    .sticky {
      top: -100px;
    }
  </style>
</head>

<body >
<header>
    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                        <h5 class="brand-name">Gamer Paradise</h5>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">

                            <li class="nav-item">
                                <a class="nav-link" href="/paniers">
                                    <i class="fa fa-shopping-cart"></i> Cart @yield('items_number')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/wishlist">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Username
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My
                                            Wishlist</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My
                                            Cart</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i>
                                            Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                </i> All Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/pcgamer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
                                        </svg>
                                        Pc gamer
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/pcportable">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                            <path
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                        </svg>
                                        Pc Portable
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/monitors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                            <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                                          </svg>
                                        Monitors
                                    </a>
                                </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                                            <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                                            <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                                          </svg>
                                        accesoire</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('contents')<br>
    @yield('footer')<br>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="{{ asset('app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</header>
{{-- <header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">
                
                <!-- Logo desktop -->		
                <a href="#" class="logo">
                    <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage 1</a></li>
                                <li><a href="home-02.html">Homepage 2</a></li>
                                <li><a href="home-03.html">Homepage 3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="product.html">Shop</a>
                        </li>

                        <li class="label1" data-label1="hot">
                            <a href="shoping-cart.html">Features</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>	

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-24">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                    </div>
                        
                    <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                        
                    <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
            <div class="flex-c-m h-full p-r-10">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>
            </div>

            <div class="flex-c-m h-full p-lr-10 bor5">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="product.html">Shop</a>
            </li>

            <li>
                <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="blog.html">Blog</a>
            </li>

            <li>
                <a href="about.html">About</a>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>

</header> --}}
@include('layouts.scripts')
</body>

</html>
