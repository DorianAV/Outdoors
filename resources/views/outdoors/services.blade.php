@extends('layouts.apps')
@section('content')
<!-- Banner Style One Start -->
<section class="banner-style-one">
    <div class="parallax" style="background-image: url({{ asset('assets/images/pattren-3.png')}});"></div>
    <div class="container">
        <div class="row">
            <div class="banner-details">
                <h2>Services</h2>
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
                        <p>Services</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Style One End -->



<!-- Service Style One Start -->
<section class="gap service-style-one">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
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


@endsection
