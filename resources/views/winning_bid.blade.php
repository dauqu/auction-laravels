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
<div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="./index.html">Home</a>
            </li>
            <li>
                <a href="#0">Pages</a>
            </li>
            <li>
                <span>winning Bids</span>
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
                            <span class="username"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c161314123c1b111d1510521f1311">[email&#160;protected]</a></span>
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
                            <a href="./winning-bids" class="active"><i class="flaticon-best-seller"></i>Winning Bids</a>
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
                <div class="dash-bid-item dashboard-widget mb-40-60">
                    <div class="header">
                        <h4 class="title">Winning Bids</h4>
                    </div>
                    <div class="button-area justify-content-between">
                        <form class="product-search">
                            <input type="text" placeholder="Item Name">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="sort-winning-bid">
                            <div class="item">Sort By : </div>
                            <select name="sort-by" class="select-bar">
                                <option value="all">All</option>
                                <option value="name">Name</option>
                                <option value="date">Date</option>
                                <option value="type">Type</option>
                                <option value="car">Car</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-30-none justify-content-center">
                    <div class="col-sm-10 col-md-6">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/car/auction-3.jpg" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="#0">2018 Hyundai Sonata</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter26"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/product/08.png" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="#0">2018 Nissan Versa, S</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter27"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/product/04.png" alt="product"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="#0">2019 Mercedes-Benz C, 300</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter1"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/product/07.png" alt="product"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="#0">2017 Harley-Davidson XG750,</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                    <div class="countdown">
                                        <div id="bid_counter2"></div>
                                    </div>
                                    <span class="total-bids">30 Bids</span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
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