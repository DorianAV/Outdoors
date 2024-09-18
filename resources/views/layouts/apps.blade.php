<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Meta Options -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->

    <title>Outdoor</title>


    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Outdoors2.png')}}">

    <!-- Owl Carousal -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css')}}">

    <!-- Animate on scroll -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.min.css')}}">

    <!-- Fancy Box -->

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">

    <!-- Nice Select -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css')}}">

    <!-- Stylesheet -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-dark.css')}}">

    <!-- Colors -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color.css')}}">


    <!-- Responsive -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

    <!-- Font Awesome 5 -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Jquery -->

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>


    <!-- Waypoint -->

    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>


    <!-- Counter -->

    <script src="{{ asset('assets/js/odometer.min.js')}}"></script>

    <!-- Bootstrap Js -->

    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Fancybox Js -->

    <script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>

    <!-- Nice Select Js -->

    <script src="{{ asset('assets/js/jquery.nice-select.js')}}"></script>

    <!-- Animate on scroll Js -->

    <script src="{{ asset('assets/js/aos.js')}}"></script>

    <!-- Owl Carousal Js -->

    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/js/gsap.min.js')}}"></script>

    <!-- Custom Js -->

    <script src="{{ asset('assets/js/custom.js')}}"></script>



</head>

<body>
<!-- Loader Start -->
<div class="preloader">
    <figure>
        <img src="{{ asset('assets/images/Outdoors2.png')}}"  alt="Image">
    </figure>
</div>
<!-- Loader End -->

<!-- Header Style One Start -->
<header class="header-style-one" >
    <div class="container">
        <div class="row">
            <div class="desktop-nav" id="stickyHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex-all justify-content-between">
                                <div class="header-logo">
                                    <a href="{{route('home')}}">
                                        <figure>
                                            <img src="{{ asset('assets/images/Outdoors.png')}}" width="150px" alt="logoo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="nav-bar">
                                    <ul>
                                        <li >
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{route('services')}}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="extras">

                                        <a href="javascript:void(0)" id="mobile-menu" class="menu-start">
                                            <svg id="ham-menu" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                        </a>
                                        <a href="javascript:void(0)" id="desktop-menu" class="menu-start">
                                            <svg id="ham-menue" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                        </a>
                                        <a href="tel:{{$contact->phone}}" class="theme-btn">{{$contact->phone}}
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62">
                                                    <defs>
                                                        <clipPath id="saddasdasdasdasda">
                                                            <rect width="40" height="62"/>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Mobisdfle" clip-path="url(#saddasdasdasdasda)">
                                                        <path id="Path_125" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/>
                                                        <path id="Path_4342" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/>
                                                    </g>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-nav" id="mobile-nav">
                <div class="res-log">
                    <a href="{{route('home')}}">
                        <img src="{{ asset('assets/images/Outdoors.png')}}" width="200px" height="120px" alt="Responsive Logo">
                    </a>
                </div>
                <ul>
                    <li >
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">About</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
                <a href="JavaScript:void(0)" id="res-cross"></a>
            </div>
            <div class="mobile-nav desktop-menu">
                <h2>MORE THAN 20 YEARS OF EXPERIENCE IN THE INDUSTRY</h2>
                <p class="des">SERVING CONROE, SPRING, THE WOODLANDS. AND SURROUNDINGS AREAS.</p>
                <figure>
                    <img src="{{ asset('assets/images/project1.jpeg')}}" width="200px" height="200px" alt="Desktop Menu Image">
                </figure>
                <h3>Get in touch</h3>
                <p class="num">{{$contact->phone}}</p>
                <p class="adrs">{{$contact->address}}</p>
                <div class="social-medias">
                    <a href="javascript:void(0)">Facebook</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Style One End -->
@yield('content')

<!-- Footer Style One Start -->
<footer class="footer-style-one">
    <div class="footer-p-1">
        <div class="container">
            <div class="row">
                <div class="footer-first">
                    <div class="footer-logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/images/Outdoors.png')}}" alt="logo" width="100" height="50">
                        </a>
                    </div>
                    <div class="contact-info d-flex-all">
                        <div class="images d-flex-all justify-content-start">
                            <figure>
                                <img src="{{ asset('assets/images/happy.png')}}" alt="Contact Images">
                            </figure>
                            <figure>
                                <img src="{{ asset('assets/images/operator.png')}}" alt="Contact Images">
                            </figure>
                        </div>
                        <p>Not Sure where to start? Contact us . <span>{{$contact->phone}}</span> Free Consultation  !</p>
                    </div>
                    <a href="{{route('contact')}}" class="theme-btn">Get a Consultation <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-col">
                        <h3>Information</h3>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-col">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79" height="94" viewBox="0 0 79 94"> <defs> <clipPath id="clip-location_B"> <rect width="79" height="94"/> </clipPath> </defs> <g id="location_B" data-name="location B" clip-path="url(#clip-location_B)"> <path id="Path_121" data-name="Path 1" d="M962.855,575.375a3,3,0,0,1-2.1-.861l-26.263-25.826c-11.03-11.993-13.791-27.653-7.492-42a38.334,38.334,0,0,1,34.959-23.117l1.346.009c15.262,0,27.868,8.452,33.722,22.609,6.152,14.878,3.046,31.554-7.912,42.485-.528.555-24.064,25.75-24.064,25.75a3,3,0,0,1-2.129.951Zm-.9-85.8A31.924,31.924,0,0,0,932.49,509.1c-5.313,12.1-2.954,25.342,6.31,35.419l23.963,23.559c15.027-16.085,20.179-21.585,22.274-23.488l-.164-.165c9.233-9.209,11.825-23.318,6.605-35.944a29.677,29.677,0,0,0-28.177-18.9Z" transform="translate(-922.725 -482.15)"/> <path id="Path_23" data-name="Path 2" d="M15,6a9,9,0,1,0,9,9,9.01,9.01,0,0,0-9-9m0-6A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(25 26)"/> </g> </svg>
                                <p>{{$contact->address}}</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62"> <defs> <clipPath id="dasdasdasd"> <rect width="40" height="62"/> </clipPath> </defs> <g id="Mobsdfsdfsdfsdfile" clip-path="url(#dasdasdasd)"> <path id="Path_331" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/> <path id="Path_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/> </g> </svg>
                                <p>{{$contact->phone}}</p>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102" height="93" viewBox="0 0 102 93"> <defs> <clipPath id="clip-Email_B"> <rect width="102" height="93"/> </clipPath> </defs> <g id="Email_B" data-name="Email B" clip-path="url(#clip-Email_B)"> <path id="Path_1444" data-name="Path 1" d="M969.85,550.4,927.766,528.2l2.8-5.307,39.229,20.7,37.712-20.677,2.885,5.261Z" transform="translate(-918 -492)"/> <path id="Path_24" data-name="Path 2" d="M969.562,494.385l48.391,25.361,0,1.818c-.023,17.272-.043,42.814-.012,47.124l.012.024v.709c0,5.426-1.516,9.425-4.508,11.885a10.4,10.4,0,0,1-6.575,2.344l-75.5-.016c-3.557.071-5.965-.931-7.717-2.752-2.4-2.5-3.517-6.391-3.317-11.577l.065-1.194c.116-5.315.029-29.954-.067-46.535l-.011-1.842Zm42.386,28.988-42.411-22.227-43.2,22.238c.189,32.939.239,42.8-.143,46.148l.13.005c-.168,4.351.8,6.309,1.645,7.185a3.342,3.342,0,0,0,2.458.984l76.043-.071a4.65,4.65,0,0,0,3.16-.963c1.517-1.248,2.319-3.754,2.319-7.25h.09C1011.893,566.689,1011.9,557.566,1011.947,523.373Z" transform="translate(-918 -492)"/> </g> </svg>
                                <p>{{$contact->email}}</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-p-3 rights">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <p>CONROEOUTDOORCONSTRUCTION.COM
                        <i class="fa-solid fa-heart"></i> © 2024 All rights reserved</p>
                    <div class="social-medias">
                        <a href="javascript:void(0)">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Style One End -->







<button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
</button>




</body>

</html>
