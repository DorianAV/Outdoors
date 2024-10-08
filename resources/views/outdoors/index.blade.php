@extends('layouts.apps')
@section('content')
    <!-- Featured Slider One Start -->
    <section class="featured-slider-one" style="background: grey;">
        <div class="containe">
            <div class="ro f-slider-one owl-carousel">
                @foreach($titleSliders as $titleSlider)
                    <div class="f-slider-layer">
                        <img src="{{ asset('storage').'/'.$titleSlider->image}}" alt="Slider 1">
                        <div class="f-slider-one-data">
                            <h1>{{$titleSlider->title}}</h1>
                            <p>{{$titleSlider->subtitle}}</p>
                            <a href="{{route('contact')}}" class="theme-btn">Contact us <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Featured Slider One End -->

    <!-- Service Style One Start -->
    <section class="gap service-style-one">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                        <div class="service-data">
                            <div class="svg-icon d-flex-all">
                                <img class="light-icon" src="{{ asset('storage').'/'.$service->image}}" alt="Icon">
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
                <div class="col-lg-6">
                    <div class="about-data-left">
                        <figure>

                            <img src="{{asset('storage').'/'.$homeSection->image1}}" width="300px" height="400px">
                        </figure>
                        <figure class="about-image">
                            <img src="{{asset('storage').'/'.$homeSection->image2}}" width="300px" height="400px">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-data-right">
                        <span>{{$homeSection->span}}</span>
                        <h2>{{$homeSection->title}}</h2>
                        <div class="about-info">
                            <p>{{$homeSection->description}}</p>
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
                @foreach($images as $image)
                    <div class="col-lg-12">
                        <div class="project-post">
                            <figure>
                                <img src="{{ asset('storage/' . $image->image) }}" width="640px" height="395px">
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Project Style One End -->

    <!-- Core Features Start -->
    <section class="core-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="space">
                        <div class="heading-style-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="data">
                                            <h2>{{$homeDetails->title}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span class="num">01.</span> {{$homeDetails->subtitle1}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description1}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <span class="num">02.</span> {{$homeDetails->subtitle2}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description2}}</p></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        <span class="num">03.</span> {{$homeDetails->subtitle3}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description3}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        <span class="num">04.</span> {{$homeDetails->subtitle4}}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{$homeDetails->description4}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shape">
                        <div class="video">
                            <figure>
                                <img src="{{ asset('storage/' . $homeDetails->image) }}" width="965px" height="825px">
                            </figure>
                            <a class="video-play-btn" data-fancybox=""
                               href="{{$homeDetails->videoUrl}}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="35" height="56" viewBox="0 0 35 56">
                                    <defs>
                                        <clipPath id="clip-video_arrow">
                                            <rect width="35" height="56"/>
                                        </clipPath>
                                    </defs>
                                    <g id="video_arrow" data-name="video arrow" clip-path="url(#clip-video_arrow)">
                                        <path id="Shape_1" data-name="Shape 1" d="M1362,5000.8,1327,4972V5027Z"
                                              transform="translate(-1326.998 -4971.996)" fill="rgba(0,0,0,0)"/>
                                        <path id="Shape_1_-_Outline" data-name="Shape 1 - Outline"
                                              d="M1333,5015.017l19.29-14.437L1333,4984.7v30.313M1327,5027V4972l35,28.807Z"
                                              transform="translate(-1326.998 -4971.996)"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Features End -->

@endsection
