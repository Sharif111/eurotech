@extends('webview.master')
@section('content')
<?php
    $AboutUs = DB::table('about_us')->orderby('id','desc')->first();
?>
<body>
    <div class="top-banner">
        <div class="banner-text">
            <p class="wow animate__animated  animate__fadeInDown animate__delay-1s"><span>{{ $AboutUs->title }}</span>
            <p class="wow animate__animated  animate__fadeInUp animate__delay-2s">{{ $AboutUs->description }}</p>
        </div>
        <video loop autoplay muted id="banner-video">
            <source src="assets/img/mockup-video.mp4" type="video/mp4" />
        </video>
        <a href="#about" class="scroll-down">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </a>
    </div>
    <div class="home-about" id="about">
        <div class="about-bg"></div>
        <div class="about-info">
            <p class="wow animate__animated animate__backInLeft">About Us</p>
            <p class="wow animate__animated animate__backInRight">{{ $AboutUs->description }}</p>
        </div>
        <div class="about-cards wow animate__animated animate__backInUp animate__delay-1s">
            @foreach($brandData as $brand)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('/webassets/brand').'/'.$brand->image}}" alt="img" />
                            <h3>$<strong class="red">{{ $brand->price }}</strong></h3>
                            <span>{{ $brand->name }}</span>
                            
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
    <div class="home-gallery">
        <p class="wow animate__animated animate__backInLeft">Lorem ipsum</p>
        <p class="wow animate__animated animate__backInRight">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem aliquid quis, debitis accusamus eos
            consectetur sapiente ipsa vero facilis nesciunt autem illum distinctio a perspiciatis fugiat mollitia animi
            dolor sunt.</p>
        <div class="gallery-container">
            <div class="card wow animate__animated animate__fadeInLeftBig">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInRightBig animate__delay-2s">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInLeftBig animate__delay-3s">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__delay-4s">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInRightBig animate__delay-5s">
                <div class="card__inner">
                    <div class="card__content card_content--front">
                        <img src="https://source.unsplash.com/random/350x400" alt="">
                    </div>
                    <div class="card__content card__content--back">
                        <p>Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eligendi nulla iure
                            recusandae vero eaque, culpa incidunt nemo, vel inventore ipsa debitis molestiae corrupti!
                            Facere hic delectus odit porro similique.</p>
                        <a href="">
                            <div>
                                <i class="zmdi zmdi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/pentagon.svg" alt="">
        <img src="assets/img/pentagon.svg" alt="">
    </div>
    <div class="home-our-clients">
        <p class="wow animate__animated animate__backInLeft">Our awesome clients.</p>
        <p class="wow animate__animated animate__backInRight">just a few words from them...</p>
        <div class="our-clients-slider owl-carousel owl-theme wow animate__animated animate__bounceIn animate__delay-1s">
            <div class="testomonial_section">
                <div class="full center">
                </div>
                <div class="full testimonial_cont text_align_center cross_layout">
                    <div class="cross_inner">
                        <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                        </p>
                        <div class="full text_align_center margin_top_30">
                            <img src="{{ asset('/webassets/icon')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/client3.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptas, vel optio laborum
                    consequatur aliquid quos cupiditate. Atque, aut dolores hic nesciunt veniam alias veritatis! Qui
                    dolore consequatur aliquid illo!
                </p>
                <p>
                    Alan Monre
                </p>
                <p>
                    CEO,Lorem
                </p>
            </div>
            <div class="item">
                <img src="assets/img/client2.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptas, vel optio laborum
                    consequatur aliquid quos cupiditate. Atque, aut dolores hic nesciunt veniam alias veritatis! Qui
                    dolore consequatur aliquid illo!
                </p>
                <p>
                    Alan Monre
                </p>
                <p>
                    CEO,Lorem
                </p>
            </div>
        </div>
    </div>
    <div class="home-blogs-container">
        <img src="assets/img/pentagon.svg" alt="">
        <div class="blog-info wow animate__animated animate__flipInX">
            <p class="wow animate__animated animate__backInUp">Latest Blogs/News</p>
        </div>
        <div class="blog-item wow animate__animated animate__flipInY animate__delay-1s">
            <div class="card-header">
                <img src="https://source.unsplash.com/random/350x320" alt="">
            </div>
            <div class="card-footer">
                <div class="blog-date">
                    07/01/2020
                </div>
                <p><a href="">Lorem ipsum dolor sit amet</a></p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="blog-item wow animate__animated animate__flipInX animate__delay-2s">
            <div class="card-header">
                <img src="https://source.unsplash.com/random/350x320" alt="">
            </div>
            <div class="card-footer">
                <div class="blog-date">
                    07/01/2020
                </div>
                <p><a href="">Lorem ipsum dolor sit amet</a></p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="blog-item">
            <div class="card-header">
                <img src="https://source.unsplash.com/random/350x320" alt="">
            </div>
            <div class="card-footer">
                <div class="blog-date">
                    07/01/2020
                </div>
                <p><a href="">Lorem ipsum dolor sit amet</a></p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <a href="news-blog.html" class="blog-more-btn wow animate__animated animate__bounce">See All Blogs/News <i class="zmdi zmdi-arrow-right"></i></a>
    </div>
    
</body>
@endsection