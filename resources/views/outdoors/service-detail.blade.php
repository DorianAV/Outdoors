@extends('layouts.apps')
@section('content')
<!-- Banner Style One Start -->
<section class="banner-style-one">
    <div class="parallax" style="background-image: url({{ asset('assets/images/pattren-3.png')}});"></div>
    <div class="container">
        <div class="row">
            <div class="banner-details">
                <h2>Service Detail</h2>
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
                        <p>Service Detail</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Style One End -->

<!-- Service-Detail-First Start -->
<section class="gap about-first service-detail-first detail-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are">
                    <div>
                        <h3>Service Details</h3>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies. Our portfolio includes <span>dozens of successfully</span> completed projects of houses of different storeys, with high–quality finishes and good repairs. Building houses is our vocation!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="who-we-are">
                    <div>
                        <h3>Service Benefits</h3>
                        <ul>
                            <li>Better defined projects, reducing risk and increasing success</li>
                            <li>We provide legislative compliance</li>
                            <li>Cost savings by getting expert advice during the project strategy and estimating</li>
                            <li>Realistic pricing and project timescales</li>
                            <li>Global access to services from world-wide construction consultancy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row s-d-gallery">
            <div class="col-lg-12">
                <figure>
                    <a data-fancybox="gallery" href="https://via.placeholder.com/1290x560">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/1290x560" alt="service-detail-1" >
                    </a>
                </figure>
            </div>
        </div>
        <div class="row s-d-gallery">
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <figure>
                    <a data-fancybox="gallery" href="https://via.placeholder.com/305x180">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/305x180" alt="service-detail-2" >
                    </a>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <figure>
                    <a data-fancybox="gallery" href="https://via.placeholder.com/305x180">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/305x180" alt="service-detail-3" >
                    </a>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <figure>
                    <a data-fancybox="gallery" href="https://via.placeholder.com/305x180">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/305x180" alt="service-detail-4" >
                    </a>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <figure>
                    <a data-fancybox="gallery" href="https://via.placeholder.com/305x180">
                        <img class="img-fluid w-100" src="https://via.placeholder.com/305x180" alt="service-detail-5" >
                    </a>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div>
                        <h3>Highest Expectations</h3>
                        <p>Our knowledgeable cost management experts understand the importance of delivering a project to meet your expectations in terms of cost, time, and quality. We will work with you to find the right, flexible and valuable solutions. No matter what sector you operate in, or the <b>scale of your project</b>, our team have the experience and know-how to support you with your goals.</p>
                        <p >In addition to construction consultancy services <b>Bureau Veritas is a global leader in testing</b>, inspection and certification (TIC) and we have more than 190+ years of experience meaning that we also can assist you in other areas of your business if needed.</p>
                        <h3>What can we support with?</h3>
                        <div class="innovation" >
                            <ul>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dedication to client satisfaction</p>
                                </li>
                            </ul>
                        </div>
                        <h3>Reporting and Cost Control</h3>
                        <div class="acc2">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-Two">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Two" aria-expanded="false" aria-controls="collapse-Two">
                                            Occupational Health Risk Management?
                                        </button>
                                    </h2>
                                    <div id="collapse-Two" class="accordion-collapse collapse" aria-labelledby="heading-Two" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish. These are often for specific projects such as building or renovation projects that are sold or leased.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-One">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-One" aria-expanded="true" aria-controls="collapse-One">
                                            What is commercial management in construction?
                                        </button>
                                    </h2>
                                    <div id="collapse-One" class="accordion-collapse collapse show" aria-labelledby="heading-One" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish. These are often for specific projects such as building or renovation projects that are sold or leased.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-Three">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Three" aria-expanded="false" aria-controls="collapse-Three">
                                            Start a construction management?
                                        </button>
                                    </h2>
                                    <div id="collapse-Three" class="accordion-collapse collapse" aria-labelledby="heading-Three" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish. These are often for specific projects such as building or renovation projects that are sold or leased.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-Four">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Four" aria-expanded="false" aria-controls="collapse-Four">
                                            Measure quality in construction projects?
                                        </button>
                                    </h2>
                                    <div id="collapse-Four" class="accordion-collapse collapse" aria-labelledby="heading-Four" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish. These are often for specific projects such as building or renovation projects that are sold or leased.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-Five">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Five" aria-expanded="false" aria-controls="collapse-Five">
                                            Prepare a construction project schedule?
                                        </button>
                                    </h2>
                                    <div id="collapse-Five" class="accordion-collapse collapse" aria-labelledby="heading-Five" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish. These are often for specific projects such as building or renovation projects that are sold or leased.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service-Detail-First End -->


@endsection
