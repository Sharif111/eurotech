@extends('webview.master')
@section('content')
<?php 
        $ProfileData = DB::table('tbl_profile')->orderby('id','desc')->first();
    ?>
<div class="contact-banner">
    <p class="wow animate_animated animate__fadeInDown">Contact Us</p>
    <p class="wow animate_animated animate__fadeInUp"></p>
</div>
<div class="contact-info">
    <div class="contact-item wow animate__animated animate__flipInY">
        <i class="zmdi zmdi-pin"></i>
        <span>{{ $ProfileData->address }}</span>
    </div>
    <div class="contact-item wow animate__animated animate__flipInY animate__delay-1s">
        <i class="zmdi zmdi-smartphone-iphone"></i>
       <span>{{ $ProfileData->phone }}</span>
    </div>
    <div class="contact-item wow animate__animated animate__flipInY animate__delay-2s">
        <i class="zmdi zmdi-email"></i>
        <span>{{ $ProfileData->email }}</span>
    </div>
    <img src="assets/img/pentagon.svg" alt="">
    <img src="assets/img/pentagon.svg" alt="">
</div>
<div class="contact-container">
    <p class="wow animate_animated animate__zoomIn">Get in touch</p>
    <div class="contact-form wow animate__animated animate__slideInLeft animate__delay-1s">
        <form action="{{ URL::to('query-request') }}" method="POST">
            <div>
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="phone" placeholder="Your Phone">
            </div>
            <input type="email" name="email" placeholder="Your Email">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button type="submit">Sent</button>
        </form>
    </div>
    <div class="contact-map wow animate__animated animate__slideInRight animate__delay-2s">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection