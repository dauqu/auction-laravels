    @include('header')

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="./home" class="logo">
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


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="./assets/images/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate">Next Generation Auction</h5>
                        <h1 class="title"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                        <p>
                            Online Auction is where everyone goes to shop, sell,and give, while discovering variety and affordability.
                        </p>
                        <a href="./products" class="custom-button yellow btn-large">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="./assets/images/banner/banner-1.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="./assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h6 class="title pl-0 w-100">Categories</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        @foreach($categories->slice(0, 10) as $row)
                        <a href="#0" class="browse-item">
                            <img src="{{$row->image}}" alt="auction">
                            <span class="info">{{$row->id}}</span>
                        </a>
                        @endforeach
                        <!-- <a href="#0" class="browse-item">
                            <img src="./assets/images/auction/02.png" alt="auction">
                            <span class="info">Business Car</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="./assets/images/auction/03.png" alt="auction">
                            <span class="info">Luxury Cars</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="./assets/images/auction/04.png" alt="auction">
                            <span class="info">Sports Cars</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="./assets/images/auction/05.png" alt="auction">
                            <span class="info">Transportation</span>
                        </a>
                        <a href="#0" class="browse-item">
                            <img src="./assets/images/auction/06.png" alt="auction">
                            <span class="info">Luxury cars</span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->

        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="./assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="./assets/images/header-icons/car-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Family Car</h2>
                            <p>We offer affordable Vehicles</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">

                    @foreach($products->slice(0, 3) as $row)
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="{{$row->image}}" alt="car"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">{{$row->name}}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Top Bid</div>
                                            <div class="amount">₹876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Price</div>
                                            <div class="amount">
                                                ₹{{number_format($row->price, 2)}}
                                            </div>
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
                                    <a href="./product/{{$row->slug}}" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    </div>


    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="./assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="./assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Business Car</h2>
                        <p>Business Car</p>
                    </div>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">

                @foreach($products->slice(0, 3) as $row)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="{{$row->image}}" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Gold Ring With Clear Stones</a>
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
                                    <div id="bid_counter23"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="./product" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top pt-max-xl-0">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="./assets/images/call-in/call-bg.png">
                <div class="section-header">
                    <h3 class="title">Register for Free & Start Bidding Now!</h3>
                    <p>From cars to diamonds to iPhones, we have it all.</p>
                </div>
                <a href="sign-up.html" class="custom-button white">Register</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->


    <!--============= Watches Auction Section Starts Here =============-->
    <section class="watches-auction-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="./assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Luxury Cars</h2>
                        <p>Luxury Cars</p>
                    </div>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                @foreach($products->slice(0, 3) as $row)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="{{$row->image}}" alt="watches"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Vintage Rolex</a>
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
                                    <div id="bid_counter20"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="./product" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--============= Watches Auction Section Ends Here =============-->


    <!--============= Popular Auction Section Starts Here =============-->
    <section class="popular-auction padding-top pos-rel">
        <div class="popular-bg bg_img" data-background="./assets/images/auction/popular/popular-bg.png"></div>
        <div class="container">
            <div class="section-header cl-white">
                <span class="cate">Closing Within 24 Hours</span>
                <h2 class="title">Popular Auctions</h2>
                <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
            </div>
            <div class="popular-auction-wrapper">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-1.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">Apple Macbook Pro Laptop</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-2.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">Canon EOS Rebel T6I
                                        Digital Camera</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-3.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">14k Gold Geneve Watch,
                                        24.5g</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-4.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">14K White Gold 185.60
                                        Grams 5.95 Carats</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-5.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">2009 Toyota Prius
                                        (Medford, NY 11763)</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auction-item-3">
                            <div class="auction-thumb">
                                <a href="./product-details.html"><img src="./assets/images/auction/popular/auction-6.jpg" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="./product-details.html">.6 Gram Pure Gold
                                        Nugget</a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids">130 Bids</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Popular Auction Section Ends Here =============-->


    <!--============= Coins and Bullion Auction Section Starts Here =============-->
    <section class="coins-and-bullion-auction-section padding-bottom padding-top pos-rel pb-max-xl-0">
        <div class="jewelry-bg d-none d-xl-block"><img src="./assets/images/auction/coins/coin-bg.png" alt="coin"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="./assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">Commercial Vehicle</h2>
                        <p>Commercial Vehicle</p>
                    </div>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                @foreach($products->slice(0, 3) as $row)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="./product-details.html"><img src="{{$row->image}}" alt="coins"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="./product-details.html">Ancient & World Coins</a>
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
                                    <div id="bid_counter17"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="./product" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--============= Coins and Bullion Auction Section Ends Here =============-->


    <!--============= Real Estate Section Starts Here =============-->
    <section class="real-estate-auction padding-top padding-bottom pos-rel oh">
        <div class="car-bg"><img src="./assets/images/auction/realstate/real-bg.png" alt="realstate"></div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="./assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title">luxury cars</h2>
                        <p>luxury cars</p>
                    </div>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="auction-slider-4 owl-theme owl-carousel">
                @foreach($products as $row)
                <div class="auction-item-4">
                    <div class="auction-thumb">
                        <a href="./product-details.html"><img src="{{$row->image}}" alt="realstate"></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h4 class="title">
                            <a href="./product-details.html">Brand New Apartments In Esenyurt, Istanbul</a>
                        </h4>
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
                                <div id="bid_counter30"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="./product" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="auction-item-4">
                    <div class="auction-thumb">
                        <a href="./product-details.html"><img src="./assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h4 class="title">
                            <a href="./product-details.html">Brand New Apartments In Esenyurt, Istanbul</a>
                        </h4>
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
                                <div id="bid_counter31"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="./product" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-4">
                    <div class="auction-thumb">
                        <a href="./product-details.html"><img src="./assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h4 class="title">
                            <a href="./product-details.html">Brand New Apartments In Esenyurt, Istanbul</a>
                        </h4>
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
                                <div id="bid_counter32"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="./product" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-4">
                    <div class="auction-thumb">
                        <a href="./product-details.html"><img src="./assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h4 class="title">
                            <a href="./product-details.html">Brand New Apartments In Esenyurt, Istanbul</a>
                        </h4>
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
                                <div id="bid_counter33"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="./product" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-4">
                    <div class="auction-thumb">
                        <a href="./product-details.html"><img src="./assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h4 class="title">
                            <a href="./product-details.html">Brand New Apartments In Esenyurt, Istanbul</a>
                        </h4>
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
                                <div id="bid_counter34"></div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="./product" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="slider-nav real-style ml-auto">
                <a href="#0" class="real-prev"><i class="flaticon-left-arrow"></i></a>
                <div class="pagination"></div>
                <a href="#0" class="real-next active"><i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
    </section>
    <!--============= Real Estate Section Starts Here =============-->


    <!--============= Art Auction Section Starts Here =============-->
    <section class="art-and-electronics-auction-section padding-top">
        <div class="container">
            <div class="row justify-content-center mb--50">
                <div class="col-xl-6 col-lg-8 mb-50">
                    <div class="section-header-2">
                        <div class="left">
                            <div class="thumb">
                                <img src="./assets/images/header-icons/camera-1.png" alt="header-icons">
                            </div>
                            <h2 class="title">Electronics</h2>
                        </div>
                        <div class="slider-nav">
                            <a href="#0" class="electro-prev"><i class="flaticon-left-arrow"></i></a>
                            <a href="#0" class="electro-next active"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="auction-slider-1 owl-carousel owl-theme  mb-30-none">
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter1"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter2"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter3"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter4"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter5"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter6"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter7"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter8"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 mb-50">
                    <div class="section-header-2">
                        <div class="left">
                            <div class="thumb">
                                <img src="./assets/images/header-icons/art-1.png" alt="header-icons">
                            </div>
                            <h2 class="title">Automatic</h2>
                        </div>
                        <div class="slider-nav">
                            <a href="#0" class="art-prev"><i class="flaticon-left-arrow"></i></a>
                            <a href="#0" class="art-next active"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="auction-slider-2 owl-carousel owl-theme mb-30-none">
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter9"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter10"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter11"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter12"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter13"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">Surveillance WiFi Exterieur, 1080P Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter14"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">WiFi Doorbell Camera for Apartments</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter15"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-item-1">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="./product-details.html">GPD Pocket 2 Ultrabook 7" inch</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter16"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Art Auction Section Ends Here =============-->


    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how1.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how2.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb">
                                <img src="./assets/images/how/how3.png" alt="how">
                            </div>
                            <div class="how-content">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="https://i.pinimg.com/236x/cb/78/2b/cb782bd9da27e7b6dcd7974d2bb3a42e--india-people-guys.jpg" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="./assets/images/client/client02.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="./assets/images/client/client03.png" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--============= Client Section Ends Here =============-->

    @include('footer')