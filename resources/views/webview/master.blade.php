<?php 
        $ProfileData = DB::table('tbl_profile')->orderby('id','desc')->first();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Shanti&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.theme.default.css">
    <link rel="stylesheet" href="assets/WOW/animate.css">
    <link rel="stylesheet" href="assets/js/animate.css">
    <!-- Style -->
    <link rel="stylesheet" href="main.css">
    <title>EuroTech</title>
</head>

<body>
    <header id="header">
        <div class="logo">
            <a href="index.html">
                <img src="assets/img/eurotech.svg" alt="">
            </a>
        </div>
        <div class="container">
            <div>
                <a class="page-scroll" href="{{asset('/')}}">Home<span class="sr-only">(current)</span></a>
            </div>
            <div>
                <a href="{{asset('/product')}}">Products</a>
            </div>
            <div>
                <a href="{{asset('/about')}}">About</a>
            </div>
            <div>
                <a href="{{asset('/news')}}">News/Blog</a>
            </div>
            <div>
                <a href="{{asset('/technology')}}">Technology</a>
            </div>
            <div>
                <a href="{{asset('/contact')}}">Contact</a>
            </div>
        </div>
    </header>





    @yield('content')




    <footer>
        <div class="firm-desc">
            <div class="social-media">
                <p>Connect with us by social links</p>
            </div>      
            <div class="social-media">
                <a href=""><div class="icon">
                    <i class="zmdi zmdi-twitter"></i>
                </div></a>
                <a href=""><div class="icon">
                    <i class="zmdi zmdi-instagram"></i>
                </div></a>
                <a href=""><div class="icon">
                    <i class="zmdi zmdi-facebook"></i>
                </div></a>
            </div>
        </div>
        <div class="footer-menu">
            <p>Menu</p>
            <ul>
                <li><a href="">Products</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="news-blog.html">News/Blog</a></li>
                <li><a href="technology.html">Technology</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="our-services">
            <p>Our Services</p>
            <ul>
                <li><a href="">lorem ipsum</a></li>
                <li><a href="">lorem ipsum</a></li>
                <li><a href="">lorem ipsum</a></li>
                <li><a href="">lorem ipsum</a></li>
                <li><a href="">lorem ipsum</a></li>
            </ul>
        </div>
        <div class="address">
            <p>Company Address</p>
            <span>{{ $ProfileData->address }}</span>
                                <p>{{ $ProfileData->phone }}
                                    <br>{{ $ProfileData->email }}</p>
            
            
        </div>
        <div class="footer-terms">
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/OwlCarousel/owl.carousel.min.js"></script>
    <script src="assets/WOW/wow.min.js"></script>
    <script src="assets/js/homepage.js"></script>
</body>
</html>