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
<div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="./index.html">Home</a>
            </li>
            <li>
                <span>Contact Us</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Contact Section Starts Here =============-->
<section class="contact-section padding-bottom">
    <div class="container">
        <div class="contact-wrapper padding-top padding-bottom mt--100 mt-lg--440">
            <div class="section-header">
                <h5 class="cate">Contact Us</h5>
                <h2 class="title">get in touch</h2>
                <p>We'd love to hear from you! Let us know how we can help.</p>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <form class="contact-form" id="contact_form">
                        <div class="form-group">
                            <label for="name"><i class="far fa-user"></i></label>
                            <input type="text" placeholder="Your Name" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="fas fa-envelope-open-text"></i></label>
                            <input type="text" placeholder="Enter Your Email ID" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="message"><i class="far fa-envelope"></i></label>
                            <textarea name="message" id="message" placeholder="Type Your Message"></textarea>
                        </div>
                        <div class="form-group text-center mb-0">
                            <button type="submit" class="custom-button">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5 d-lg-block d-none">
                    <img src="./assets/images/contact.png" class="w-100" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Contact Section Ends Here =============-->


<!--============= Footer Section Starts Here =============-->
@include('footer')