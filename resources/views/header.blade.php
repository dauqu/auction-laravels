<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>

    <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/custom.css"> -->

    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css')}}">

    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png')}}" type="image/x-icon">
    <style>
        .profile_image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Bn</option>
                                <option value="Rs">Rs</option>
                                <option value="Us">Us</option>
                                <option value="Pk">Pk</option>
                                <option value="Arg">Arg</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li>
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                        </li>
                        <li>
                            <a href="./dashboard" class="user-button">
                            <img class="profile_image" src="{{ Auth::user()->profile_image }}" alt="user" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ asset('/')}}">
                            <img src="{{ asset('/assets/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="./">Home</a>
                            <!-- <ul class="submenu">
                                <li>
                                    <a href="./index.html">Home Page One</a>
                                </li>
                                <li>
                                    <a href="./index-2.html">Home Page Two</a>
                                </li>
                                <li>
                                    <a href="./index-3.html">Home Page Three</a>
                                </li>
                                <li>
                                    <a href="./index-4.html">Home Page Four</a>
                                </li>
                                <li>
                                    <a href="./index-5.html">Home Page Five</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="./products">Auction</a>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#0">Products</a>
                                    <!-- <ul class="submenu">
                                        <li>
                                            <a href="./product.html">Product Page 1</a>
                                        </li>
                                        <li>
                                            <a href="./product-2.html">Product Page 2</a>
                                        </li>
                                        <li>
                                            <a href="./product-details.html">Product Details</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <!-- <li>
                                    <a href="#0">My Account</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="./sign-up.html">Sign Up</a>
                                        </li>
                                        <li>
                                            <a href="./sign-in.html">Sign In</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="#0">Dashboard</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="./dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="./profile.html">Personal Profile</a>
                                        </li>
                                        <li>
                                            <a href="./my-bid.html">My Bids</a>
                                        </li>
                                        <li>
                                            <a href="./winning-bids.html">Winning Bids</a>
                                        </li>
                                        <li>
                                            <a href="./notifications.html">My Alert</a>
                                        </li>
                                        <li>
                                            <a href="./my-favorites.html">My Favorites</a>
                                        </li>
                                        <li>
                                            <a href="./referral.html">Referrals</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a href="./about">About Us</a>
                                </li>
                                <li>
                                    <a href="./faqs">Faqs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./contact">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->