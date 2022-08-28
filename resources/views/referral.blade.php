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
                <span>Referrals</span>
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
                                <img src="./assets/images/dashboard/user.png" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#0">Percy Reed</a></h5>
                            <span class="username"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0babfb8be90b7bdb1b9bcfeb3bfbd">[email&#160;protected]</a></span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="./dashboard"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="./profile"><i class="flaticon-settings"></i>Personal Profile </a>
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
                            <a href="./referrals" class="active"><i class="flaticon-shake-hand"></i>Referrals</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="dashboard-widget mb-30">
                    <h4 class="title mt-0 mb-20">Welcome to the Sbidu Referral program.</h4>
                    <p>Have friends sign up using your unique link and earn rewards.</p>
                </div>
                <div class="dashboard-widget mb-30">
                    <h5 class="title mt-0 mb-20">Share your unique referral link</h5>
                    <form action="#0" class="referral-form mb-30">
                        <input type="text" value="https://Sbidu.com?grsf=y4wyd8" readonly>
                        <button type="submit" class="custom-button">Copy Link</button>
                    </form>
                    <div class="share-area">
                        <div class="left">
                            Share :
                        </div>
                        <ul class="social-icons">
                            <li>
                                <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dashboard-widget mb-30">
                    <h5 class="title mt-0 mb-30">Promotions & Rewards</h5>
                    <p class="mb-3 mb-md-4">Give $5 off to a friend and get $5 credit after they make a purchase</p>
                    <a href="#0" class="custom-button pink"><i class="flaticon-trophy"></i> 1 Referrals Required</a>
                </div>
                <div class="dashboard-widget mb-30">
                    <h5 class="title mt-0 mb-20">Leaderboard</h5>
                    <table class="referral-table">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Sbidu Bidder</th>
                                <th>Referrals</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="rank">#01</td>
                                <td data-label="Sbidu bidder">jo*@m**********</td>
                                <td data-label="referrals">01</td>
                            </tr>
                            <tr>
                                <td data-label="rank">#02</td>
                                <td data-label="Sbidu bidder">ma****************@y********</td>
                                <td data-label="referrals">01</td>
                            </tr>
                            <tr>
                                <td data-label="rank">#03</td>
                                <td data-label="Sbidu bidder">ho********@y********</td>
                                <td data-label="referrals">00</td>
                            </tr>
                            <tr>
                                <td data-label="rank">#04</td>
                                <td data-label="Sbidu bidder">ma****************@y********</td>
                                <td data-label="referrals">00</td>
                            </tr>
                            <tr>
                                <td data-label="rank">#05</td>
                                <td data-label="Sbidu bidder">ru*@f**********</td>
                                <td data-label="referrals">00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dashboard-widget">
                    <h5 class="title mt-0 mb-30">Your Stats</h5>
                    <h3 class="stats">08<span>Referrals Made</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->


<!--============= Footer Section Starts Here =============-->
@include('footer')