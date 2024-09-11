@extends('layouts.apps')
@section('content')

<!-- Banner Style One Start -->
<section class="banner-style-one">
    <div class="parallax" style="background-image: url({{ asset('assets/images/pattren-3.png')}});"></div>
    <div class="container">
        <div class="row">
            <div class="banner-details">
                <h2>About Us</h2>
                <p>our values and vaulted us to the top of our industry.</p>
            </div>
        </div>
    </div>
    <div class="breadcrums">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            <i class="fa-solid fa-house"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="current">
                        <p>About Us</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Style One End -->

<!-- About-First Start -->
<section class="gap about-first">
    <div class="container">
        <div class="row">
            <h2>{{$about->title}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are">
                    <div>
                        <h3>{{$about->subtitle1}}</h3>
                        <p>{{$about->description1}}</p>
                    </div>
                    <br>
                    <figure>
                        <img class="w-100" src="{{asset('storage').'/'.$about->image1}}" alt="About Image One">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="who-we-are space">
                    <div>
                        <h3>{{$about->subtitle2}}</h3>
                        <p>{{$about->description2}}</p>
                    </div>
                    <figure>
                        <img class="w-100" src="{{asset('storage').'/'.$about->image2}}" alt="About Image Two ">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-First End -->
@endsection
