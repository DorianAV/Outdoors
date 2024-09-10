@extends('layouts.apps')
@section('content')
<!-- Featured Slider One Start -->
<section class="featured-slider-one" style="background: grey;">
    <div class="containe">
        <div class="ro f-slider-one owl-carousel">
            <div class="f-slider-layer">
                <img src="{{ asset('assets/images/slide1.jpeg')}}" alt="Slider 1">
                <div class="f-slider-one-data">
                    <h1  >Experience <br> Matters</h1>
                    <br>
                    <p>SERVING  CONROE, SPRING, THE WOODLANDS. AND SURROUNDINGS AREAS. </p>
                    <a href="{{route('contact')}}"  class="theme-btn">Contact us <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="f-slider-layer">
                <img src="{{ asset('assets/images/slide2.jpeg')}}" alt="Project Img">
                <div class="f-slider-one-data">
                    <h1>A Better Way To Build Your Dreams</h1>
                    <a href="{{route('contact')}}"  class="theme-btn">Contact us <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
            <div class="f-slider-layer">
                <img src="{{ asset('assets/images/slide3.jpeg')}}" alt="Project Img 2">
                <div class="f-slider-one-data">
                    <h1>Build Innovative & Industrial Solutions</h1>
                    <a href="{{route('contact')}}"  class="theme-btn">Contact us <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Featured Slider One End -->

<!-- Service Style One Start -->
<section class="gap service-style-one">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="{{ asset('').$service->image}}" alt="Icon">
                        </div>
                        <h3><a href=" ">{{$service->title}}   </a></h3>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Service Style Two End -->

<!-- About Style One Start -->
<section class="gap no-top about-style-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" >
                <div class="about-data-left">
                    <figure>
                        <img src="{{ asset('assets/images/quality1.jpeg')}}" width="300px" height="400px">
                    </figure>
                    <figure class="about-image">
                        <img src="{{ asset('assets/images/quality2.jpeg')}}"  width="300px" height="400px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="about-data-right">
                    <span>QUALITY</span>
                    <h2>GUARANTEE AND SATISFACTION</h2>
                    <div class="about-info">
                        <p>
                            WE ARE PLEASED TO CREATE AND INNOVATE OUTDOOR SPACES. OUR GOAL IS TO IMPROVE THE QUALITY OF LIFE OF OUR CLIENTS BY PROVIDING THEM WITH A SPACE TO ENJOY WITH FAMILY AND FRIENDS, WHERE YOU ARE THE ARCHITECT AND DESIGNER, WE ARE THE HANDS THAT WILL MAKE IT A REALITY.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Style One End -->


<!-- Project Style One Start -->
<section class="gap project-style-one light-bg-color">
    <div class="heading">

        <h2>Projects Completed</h2>
    </div>
    <div class="container">
        <div class="row project-slider owl-carousel">
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project1.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project2.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project3.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project4.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project5.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project6.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project7.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-post">
                    <figure>
                        <img src="{{ asset('assets/images/project8.jpeg')}}" width="640px" height="395px">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Style One End -->

<!-- Core Features Start -->
<section class="core-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" >
                <div class="space">
                    <div class="heading-style-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="data">
                                        <h2>WORKING PROCESS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="num">01.</span> ESTIMATE
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You give us the exact details of what you want to build, we will give you an idea of how much it will cost to do it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="num">02.</span> QUESTIONS AND CONCERNS
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Let us know your questions, concerns, we will try to be as clear as possible.</p>                  </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="num">03.</span> MAKE A PLAN
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>What day you want to start, schedule and organize our team based on your needs</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="num">04.</span> MAKE IT A REALITY
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We will work from start to finish, with the hope that in the end your smile and that of your loved ones will be the last thing we see when we leave onto the next project.                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="shape">
                    <div class="video">
                        <figure>
                            <img src="{{ asset('assets/images/working.jpeg')}}" width="965px" height="825px">
                        </figure>
                        <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=uemObN8_dcw">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="56" viewBox="0 0 35 56"> <defs> <clipPath id="clip-video_arrow"> <rect width="35" height="56"/> </clipPath> </defs> <g id="video_arrow" data-name="video arrow" clip-path="url(#clip-video_arrow)"> <path id="Shape_1" data-name="Shape 1" d="M1362,5000.8,1327,4972V5027Z" transform="translate(-1326.998 -4971.996)" fill="rgba(0,0,0,0)"/> <path id="Shape_1_-_Outline" data-name="Shape 1 - Outline" d="M1333,5015.017l19.29-14.437L1333,4984.7v30.313M1327,5027V4972l35,28.807Z" transform="translate(-1326.998 -4971.996)"/> </g> </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Core Features End -->

@endsection
