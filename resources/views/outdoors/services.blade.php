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
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/house_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/house_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">NEW CONSTRUCTION ADDITIONS</a></h3>
                    <p>Do you need extra space? a room or simply make some changes so that the space you enjoy so much becomes perfect? Do you need a place to store your tools? Tell us what needs to be added, modified or created... together we can do it.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/roofing_light.png')}}" >
                        <img class="dark-icon" src="{{ asset('assets/images/roofing_dark.png')}}">
                    </div>
                    <h3><a href=" ">ROOFING</a></h3>
                    <p>The roof is one of the main and most important structures of your home, take action and protect your assets, if it is time to replace the roof of your home, or make a repair... count on us.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/paiting_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/paiting_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">PAINTING</a></h3>
                    <p>You need to make some changes, a fresher color... a combination or a new design came to your mind and you are ready to carry it out, we can give that change to your house or project.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/deck_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/deck_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">DECK</a></h3>
                    <p>Do you need a deck next to your house, a space where you can sit and relax or eat, be with your friends and enjoy pleasant moments? Let us help you make your intentions come true.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/gazebo_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/gazebo_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">GAZEBOS</a></h3>
                    <p>A gazebo is a freestanding, open garden structure, sometimes whit a specific design, with a roof. Most gazebos are constructed of wood or metal and have built-in seating inside the sheltered area.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/patio_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/paiting_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">PATIO COVER </a></h3>
                    <p>Whether providing shade or protection from rain, a patio structure is an element that makes your outdoor space livable, no matter the weather. These moments can last as long as necessary.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/arbors_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/arbors_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">ARBORS </a></h3>
                    <p>One of the favorites of landscaping lovers is a garden alcove with shade, sides and a roof made up of trees or climbing plants on a wooden framework.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/outdoors_kitchen_light.png')}}" alt="Icon">
                        <img class="dark-icon" src="{{ asset('assets/images/outdoors_kitchen_dark.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">OUTDOOR KITCHEN   </a></h3>
                    <p>For lovers of outdoor cooking, who enjoy preparing the favorites of their family and friends, without missing a moment of fun, an outdoor kitchen will allow you to pamper yourself and your loved ones.</p>
                </div>
            </div>
            {{--Nuevos--}}
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/window.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">WINDOW AND/OR DOOR NEW INSTALLATION.     </a></h3>
                    <p>Enhance your home's security and style with our professional window and door installation, tailored to your needs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/bulkhead.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">BULKHEAD REPAIRS    </a></h3>
                    <p>Restore your property with our bulkhead repair services. We address leaks, cracks, and structural issues to ensure long-lasting durability and prevent future problems.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/washing.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">POWER WASHING   </a></h3>
                    <p>Revitalize your home’s exterior with our power washing service. Remove dirt, grime, and stains to restore the fresh and clean appearance of driveways, decks, and siding.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/gutter.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">GUTTER CLEANING   </a></h3>
                    <p>Protect your home from water damage with our thorough gutter cleaning service. We clear debris and blockages to keep your gutters functioning properly and prevent overflow.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" >
                <div class="service-data">
                    <div class="svg-icon d-flex-all">
                        <img class="light-icon" src="{{ asset('assets/images/fence.png')}}" alt="Icon">
                    </div>
                    <h3><a href=" ">NEW FENCE AND REPAIRS   </a></h3>
                    <p>Enhance your property with our new fence installation and repair services. We offer durable and stylish fencing solutions to boost both security and curb appeal.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
