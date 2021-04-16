@extends('webview.master')
@section('content')
<?php
    $AboutUs = DB::table('about_us')->orderby('id','desc')->first();
?>
<div class="about-banner">
    <p class="wow animate__animated  animate__fadeInDown">About Us</p>
    <p class="wow animate__animated  animate__fadeInUp animate__delay-1s">{{ $AboutUs->description }}</p>
</div>
<div class="about-info-container">
    <img src="assets/img/pentagon.svg" alt="">
    <p class="title wow animate__animated animate__slideInLeft"></p>
    <p class="wow animate__animated animate__slideInRight animate__delay-1s">{{ $AboutUs->description }}<br><br>
        
    </p>
</div>
<div class="about-bg-seperator"></div>
<div class="about-why-choose-us">
    <div>
        <p class="wow animate__animated animate__zoomIn">Some reasons</p>
        <p class="wow animate__animated animate__flipInX animate__delay-1s">Why Choose Us</p>
    </div>
    <div class="advantages-container">
        <div class="advantages-item wow animate__animated animate__flipInY">
            <p>01</p>
            <div>
                
                <p>{{ $AboutUs->description }}</p>
            </div>
        </div>
        <div class="advantages-item wow animate__animated animate__flipInY animate__delay-1s">
            <p>02</p>
            <div>
                <p>{{ $AboutUs->description }}</p>
                
            </div>
        </div>
        <div class="advantages-item wow animate__animated animate__flipInY animate__delay-2s">
            <p>03</p>
            <div>
                <p>{{ $AboutUs->description }}</p>
                
            </div>
        </div>
        <div class="advantages-item wow animate__animated animate__flipInY">
            <p>04</p>
            <div>
                <p>{{ $AboutUs->description }}</p>
                
            </div>
        </div>
        <div class="advantages-item wow animate__animated animate__flipInY animate__delay-1s">
            <p>05</p>
            <div>
                <p>{{ $AboutUs->description }}</p>
                
            </div>
        </div>
        <div class="advantages-item wow animate__animated animate__flipInY animate__delay-2s">
            <p>06</p>
            <div>
                <p>{{ $AboutUs->description }}</p>
                
            </div>
        </div>
    </div>
</div>
<div class="about-timeline">
    <div class="flex-parent">
        <div class="description-flex-container">
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>1Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>2Lorem</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="active container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <span>{{ $AboutUs->title }}</span>
                    <p>{{ $AboutUs->description }}</p>
                </div>
                <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>4Lorem ipsum</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>5Dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>6Ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>7Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>8Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class=" animate__animated animate__fadeInLeft">
                    <p>9Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
            <div class="container-structure">
                <div class="animate__animated animate__fadeInLeft">
                    <p>10Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorum, asperiores tempore
                        cumque blanditiis maiores voluptate delectus itaque accusamus voluptates similique numquam,
                        aut praesentium voluptatum ratione ex laboriosam iure sint.
                    </p>
                </div>
                <img src="https://source.unsplash.com/random/400x400" alt="">
            </div>
        </div>
    </div>
</div>
<div class="about-changeable">
    
</div>

@endsection