@include('header')
<!--============= Header Section Ends Here =============-->

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
<div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="./index.html">Home</a>
            </li>
            <li>
                <a href="#0">My Account</a>
            </li>
            <li>
                <span>Personal profile</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                    <div class="user">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="{{ Auth::user()->profile_image }}" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#0">{{ Auth::user()->name }}</a></h5>
                            <span class="username"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b2b7b0b698bfb5b9b1b4f6bbb7b5">{{ Auth::user()->email }}</a></span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="./dashboard"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="./profile" class="active"><i class="flaticon-settings"></i>Personal Profile </a>
                        </li>
                        <li>
                            <a href="./my-bid"><i class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="./winning-bids"><i class="flaticon-best-seller"></i>Winning Bids</a>
                        </li>
                        <li>
                            <a href="./notifications"><i class="flaticon-alarm"></i>My Alerts</a>
                        </li>
                        <li>
                            <a href="./favorites"><i class="flaticon-star"></i>My Favorites</a>
                        </li>
                        <li>
                            <a href="./referrals"><i class="flaticon-shake-hand"></i>Referrals</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Personal Details</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Name</div>
                                    <div class="info-value">{{ Auth::user()->name }}</div>
                                </li>
                                <li>
                                    <div class="info-name">About</div>
                                    <div class="info-value">{{ Auth::user()->about }}</div>
                                </li>
                                <li>
                                    <div class="info-name">Date of Birth</div>
                                    <div class="info-value">{{ Auth::user()->dob }}</div>
                                </li>
                                <li>
                                    <div class="info-name">Address</div>
                                    <div class="info-value">{{ Auth::user()->full_address }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Account Settings</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Language</div>
                                    <div class="info-value">English (United States)</div>
                                </li>
                                <li>
                                    <div class="info-name">Time Zone</div>
                                    <div class="info-value">(GMT-06:00) Central America</div>
                                </li>
                                <li>
                                    <div class="info-name">Status</div>
                                    <div class="info-value"><i class="flaticon-check text-success"></i> {{ Auth::user()->status }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Email Address</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Email</div>
                                    <div class="info-value"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e1ece2e5f2f4b3b4b9c0e7ede1e9ecaee3efed">{{ Auth::user()->email }}</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Phone</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Mobile</div>
                                    <div class="info-value">+91 {{ Auth::user()->phone }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item dashboard-widget">
                            <div class="header">
                                <h4 class="title">Security</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Password</div>
                                    <div class="info-value">xxxxxxxxxxxxxxxx</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->


<!--============= Footer Section Starts Here =============-->
@include('footer')