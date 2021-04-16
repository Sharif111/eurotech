@extends('webview.master')
@section('content')
<?php
    $AboutUs = DB::table('about_us')->orderby('id','desc')->first();
?>
<div class="technology-banner banners-default">
    <p class="wow animate_animated animate__fadeInDown">Technology</p>
    <p class="wow animate_animated animate__fadeInUp"></p>
</div>
<div class="technology-nav">
    <ul>
        <li class="active-tech-nav" id="a"> <span>{{ $AboutUs->title }}</span></li>
        <li id="b">Lorem ipsum</li>
    </ul>
</div>
<div class="tech-nav-container default-cntr" id="a-container">
    <div>
        <div class="wow animate__animated animate__bounceInLeft">
            
            <p>
                <p>{{ $AboutUs->description }}</p>
            </p>
            
        </div>
        <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="img" class="wow animate_animated animate__bounceInRight"/>
    </div>
    <hr>
    <div>
        <div class="wow animate__animated animate__bounceInLeft">
            
            <p>
                <p>{{ $AboutUs->description }} </p>
            </p>
            
        </div>
        <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="img" class="wow animate_animated animate__bounceInRight"/>
    </div>
    <div class="tech-gallery default-cntr wow animate__animated animate__bounceInUp">
        <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="img">
        <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="img">
        <img src="{{ asset('/webassets/aboutus').'/'.$AboutUs->image}}" alt="img">
        
    </div>
</div>
<div class="tech-nav-container default-cntr hide-nav-cntr" id="b-container">
    <div>
        <div class="wow animate_animated animate__bounceInLeft">
            <p>2Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            <p>
                Uniquely fashion adaptive products whereas reliable internal or "organic" sources. Holisticly extend
                worldwide methods of empowerment after frictionless "outside the box" thinking. Quickly utilize
                superior
                services whereas distinctive e-services. Energistically reintermediate high-payoff imperatives
                before
                leading-edge leadership. Credibly drive fully researched bandwidth rather than team driven
                imperatives.

                Enthusiastically actualize corporate applications with tactical e-tailers. Enthusiastically network
                highly
                efficient action items rather than focused strategic theme areas. Intrinsicly visualize intuitive
                e-commerce
                rather than professional intellectual capital. Credibly facilitate revolutionary opportunities
                vis-a-vis
                optimal experiences. Holisticly transition just in time best practices after reliable core
                competencies.

                Conveniently foster worldwide applications with team building innovation. Interactively matrix
                synergistic
                methodologies with alternative action items. Globally seize empowered convergence vis-a-vis
                end-to-end
                collaboration and idea-sharing. Collaboratively productivate just in time technologies via quality
                methods
                of empowerment. Quickly evisculate interactive expertise with 24/7 web-readiness.

                Conveniently formulate one-to-one.
            </p>
            <ul class="bullet-list pseudo-icon">
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus optio adipisci
                    blanditiis
                    saepe quaerat eaque velit molestiae ipsum modi eius, tempora quis omnis iure doloremque ipsa.
                    Excepturi,
                    voluptate dolorum!</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus optio adipisci
                    blanditiis
                    saepe quaerat eaque velit.</li>
            </ul>
        </div>
        <img src="https://dummyimage.com/600x600/eeeeee/000000" alt="" class="wow animate_animated animate__bounceInRight">
    </div>
    <hr>
    <div>
        <div class="wow animate_animated animate__bounceInLeft">
            <p>2Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            <p>
                Uniquely fashion adaptive products whereas reliable internal or "organic" sources. Holisticly extend
                worldwide methods of empowerment after frictionless "outside the box" thinking. Quickly utilize
                superior
                services whereas distinctive e-services. Energistically reintermediate high-payoff imperatives
                before
                leading-edge leadership. Credibly drive fully researched bandwidth rather than team driven
                imperatives.

                Enthusiastically actualize corporate applications with tactical e-tailers. Enthusiastically network
                highly
                efficient action items rather than focused strategic theme areas. Intrinsicly visualize intuitive
                e-commerce
                rather than professional intellectual capital. Credibly facilitate revolutionary opportunities
                vis-a-vis
                optimal experiences. Holisticly transition just in time best practices after reliable core
                competencies.

                Conveniently foster worldwide applications with team building innovation. Interactively matrix
                synergistic
                methodologies with alternative action items. Globally seize empowered convergence vis-a-vis
                end-to-end
                collaboration and idea-sharing. Collaboratively productivate just in time technologies via quality
                methods
                of empowerment. Quickly evisculate interactive expertise with 24/7 web-readiness.

                Conveniently formulate one-to-one.
            </p>
            <ul class="bullet-list pseudo-icon">
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus optio adipisci
                    blanditiis
                    saepe quaerat eaque velit molestiae ipsum modi eius, tempora quis omnis iure doloremque ipsa.
                    Excepturi,
                    voluptate dolorum!</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam accusamus optio adipisci
                    blanditiis
                    saepe quaerat eaque velit.</li>
            </ul>
        </div>
        <img src="https://dummyimage.com/600x600/eeeeee/000000" alt="" class="wow animate_animated animate__bounceInRight">
    </div>
</div>
<div class="tech-static">
    <p class="wow animate__animated animate__bounceInLeft"></P>
    <p class="wow animate__animated animate__bounceInRight">{{ $AboutUs->description }}</p>
</div>
<div class="tech-video-container">
    <div class="video-bg">
        <p class="wow animate__animated animate__bounceInLeft">{{ $AboutUs->description }}</p>
        <p class="wow animate__animated animate__bounceInRight">{{ $AboutUs->description }}</p>
    </div>
    <div class="tech-video  wow animate__animated animate__backInUp">
        <div class="tech-play-button js-modal-btn" data-video-id="oSmUI3m2kLk">
            <i class="zmdi zmdi-play"></i>
        </div>
    </div>
</div>
@endsection