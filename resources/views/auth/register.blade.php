@include('header')

<!--============= Cart Section Starts Here =============-->
<div class="cart-sidebar-area">
    <div class="top-content">
        <a href="index.html" class="logo">
            <img src="./assets/images/logo/logo2.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products">
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Color Pencil</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Water Pot</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Art Paper</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Stop Watch</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item">
                <div class="thumb">
                    <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#0">Comics Book</a></h4>
                    <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper text-center">
                <a href="#0" class="custom-button"><span>Checkout</span></a>
            </div>
        </div>
    </div>
</div>
<!--============= Cart Section Ends Here =============-->


<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="./index.html">Home</a>
            </li>
            <li>
                <a href="#0">Pages</a>
            </li>
            <li>
                <span>Sign Up</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Account Section Starts Here =============-->
<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">SIGN UP</h2>
                    <p>We're happy you're here!</p>
                </div>
                <ul class="login-with">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                    </li>
                </ul>
                <div class="or">
                    <span>Or</span>
                </div>
                <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="form-group mb-30">
                        <label for="login-name"><i class="far fa-user"></i></label>
                        <input type="text" id="login-name" placeholder="Full Name" name="name" :value="old('name')" required autofocus>
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-at"></i></label>
                        <input type="email" id="login-email" placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
                        <span class="pass-type"><i class="fas fa-email"></i></span>
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-password"><i class="fas fa-lock"></i></label>
                        <input type="password" id="login-password" placeholder="Password" id="password" class="block mt-1 w-full" name="password" :value="old('password')" required>
                        <span class="pass-type"><i class="fas fa-password"></i></span>
                    </div>
                    <div class="form-group mb-30">
                        <label for="password_confirmation"><i class="fas fa-lock"></i></label>
                        <input type="password" id="password_confirmation" placeholder="Confirm Password" class="block mt-1 w-full" name="password_confirmation" :value="old('password_confirmation')" required>
                        <span class="pass-type"><i class="fas fa-email"></i></span>
                    </div>
                    <div class="form-group checkgroup mb-30">
                        <input type="checkbox" name="terms" id="check"><label for="check">The Sbidu Terms of Use apply</label>
                    </div>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                    <p>Log in and go to your Dashboard.</p>
                    <a href="./login" class="custom-button transparent">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Account Section Ends Here =============-->


<!--============= Footer Section Starts Here =============-->
@include('footer')