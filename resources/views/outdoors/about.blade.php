@extends('layouts.apps')
@section('content')

<!-- Banner Style One Start -->
<section class="banner-style-one">
    <div class="parallax" style="background-image: url(assets/images/pattren-3.png);"></div>
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
            <h2>Plan your success, we build it.</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are">
                    <div>
                        <h3>MISSION</h3>
                        <p>Provide quality work in a timely and form committed to our clients and their
                            families wishing to serve and be part of the beginning of a project that will
                            create unforgettable moments.</p>
                    </div>
                    <br>
                    <figure>
                        <img class="w-100" src="assets/images/about1.jpg" alt="About Image One">
                    </figure>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="who-we-are space">
                    <div>
                        <h3>VISION</h3>
                        <p>Continue to earn the trust of our customers, create a company committed to the
                            family and their needs.</p>
                    </div>
                    <figure>
                        <img class="w-100" src="assets/images/about2.png" alt="About Image Two ">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-First End -->
@endsection
