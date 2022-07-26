<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="Opus labworks - Flutter, Ionic, Android, iOS developer" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- <link rel="shortcut icon" href="https://opuslab.works/images/favicon.png"> -->
    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('Front/font/stylesheet.css')}}">
    <!--  For icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!--  For owl.carousel -->
    <link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/owl.theme.default.min.css')}}">
    <!--  For animate.css -->
    <link rel="stylesheet" href="{{asset('Front/css/animate.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{asset('storage/'. (App\Models\Websit::latest()->first()->favicon_image ?? 'assets/favicon.png'))}}">

    @if(app()->getLocale() == "en")
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Tajawal', sans-serif !important;
            }
            form .form-group textarea,
            form .form-group input {

                font-family:'Tajawal', sans-serif !important;
            }
            form .form-group textarea::-webkit-input-placeholder,
            form .form-group input::-webkit-input-placeholder {
                font-family:'Tajawal', sans-serif !important;

            }
            form .form-group textarea:-ms-input-placeholder,
            form .form-group input:-ms-input-placeholder {
                font-family:'Tajawal', sans-serif !important;
            }

            form .form-group textarea::placeholder,
            form .form-group input::placeholder {
                font-family: 'Tajawal', sans-serif !important;
            }

            p,
            span,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            li {      font-family:'Tajawal', sans-serif !important;
            }
        </style>
        @endif

</head>

<body @if(app()->getLocale() == "ar") dir="rtl" @else dir="ltr" @endif class="home_page wow fadeIn dark_theme" data-wow-duration="1s">
<div class="menuButton" id="openMenu">
    <i class="zmdi zmdi-menu"></i>
</div>
<div id="butter">

    <!--    header start-->
    <header class="px-2 pt-2">
        <nav class="navbar navbar-light px-0 px-lg-4">
            <div class="container-fluid py-3 col-sm-12 col-md-11 col-lg-11 px-sm-0 d-flex align-items-center">
                <a class="navbar-brand d-block m-0">
                    <img src="{{asset('storage/'. (App\Models\Websit::latest()->first()->logo ?? 'assets/logo.png'))}}" class="img-fluid" width="150px" alt="Opus labworks logo">
                    <img src="{{asset('storage/'. (App\Models\Websit::latest()->first()->logo ?? 'assets/logo.png'))}}" class="img-fluid" width="150px"  alt="Opus labworks light logo">
                </a>

                <div class="follow_us align-items-center d-sm-none d-md-none d-lg-flex">
                    <div class="darkTheme_lightThemeButton d-flex" id="darkTheme">
                        <i class="zmdi zmdi-sun"></i>
                        <i class="zmdi zmdi-brightness-3"></i>
                    </div>

                    <h2>&nbsp;</h2>

                    <div class="icon_box d-flex">
                        @if(isset(App\Models\Websit::latest()->first()->facebook))
                        <a href="{{App\Models\Websit::latest()->first()->facebook}}" class="d-block" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                        @endif
                            @if(isset(App\Models\Websit::latest()->first()->twitter))
                        <a href="{{App\Models\Websit::latest()->first()->twitter}}" class="d-block" target="_blank">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                            @endif
                            @if(isset(App\Models\Websit::latest()->first()->linkedin))
                        <a href="{{App\Models\Websit::latest()->first()->linkedin}}" class="d-block" target="_blank">
                            <i class="zmdi zmdi-linkedin"></i>
                        </a>
                            @endif
                            @if(isset(App\Models\Websit::latest()->first()->instagram))
                        <a href="{{App\Models\Websit::latest()->first()->instagram}}" class="d-block" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                        </a>
                            @endif
                            @if(isset(App\Models\Websit::latest()->first()->youtube))
                        <a href="{{App\Models\Websit::latest()->first()->youtube}}" class="d-block" target="_blank">
                            <i class="zmdi zmdi-youtube-play"></i>
                        </a>
                            @endif
                            @if(isset(App\Models\Websit::latest()->first()->behance))
                                <a href="{{App\Models\Websit::latest()->first()->behance}}" class="d-block" target="_blank">
                                    <i class="zmdi zmdi-behance"></i>
                                </a>
                            @endif
                            @if(isset(App\Models\Websit::latest()->first()->whatsapp))
                                <a href="{{App\Models\Websit::latest()->first()->whatsapp}}" class="d-block" target="_blank">
                                    <i class="zmdi zmdi-whatsapp"></i>
                                </a>
                            @endif

                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle language_dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-google-earth"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <ul class="">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li style="padding: 0.25rem 1.5rem;">
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </nav>
    </header>
@yield("content")


    <!--Footer section start-->
    <footer class="padding-top position-relative px-lg-4">


        <div class="container-fluid  col-sm-12 col-md-11 col-lg-11 padding-bottom">
            <div class="row align-items-start">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <a class="navbar-brand d-block m-0">
                        <img src="{{asset('storage/'. (App\Models\Websit::latest()->first()->logo ?? 'assets/logo.png'))}}" class="img-fluid"  alt="Opus labworks logo">
                        <img src="{{asset('storage/'. (App\Models\Websit::latest()->first()->logo ?? 'assets/logo.png'))}}" class="img-fluid" alt="Opus labworks light logo">

                    </a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 pr-lg-5    ">
                    <div class="contacts col-sm-12 col-md-12 col-lg-12 col-xl-8 px-0 ml-auto">
                        <div class="box d-flex align-items-center w-100 pt-2">
                            <h2>{{__("Follow")}}</h2>
                            <div class="icon_box d-flex ml-auto">
                                <a href="https://www.facebook.com/opuslabworks" class="d-block" target="_blank">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/opuslabworks/" class="d-block" target="_blank">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/c/OpusLabWorks" class="d-block" target="_blank">
                                    <i class="zmdi zmdi-youtube-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box d-flex align-items-center w-100">
                            <h2>{{__("WhatsApp")}}</h2>
                            <h3 class="ml-auto">{{App\Models\Websit::latest()->first()->phone}}</h3>
                        </div>
                        <div class="box d-flex align-items-center w-100">
                            <h2>{{__("Email")}}</h2>
                            <h3 class="ml-auto">{{App\Models\Websit::latest()->first()->email}}</h3>
                        </div>
                        <div class="box d-flex align-items-center w-100">
{{--                            <a title="DMCA.com Protection Status" class="dmca-badge">--}}
{{--                                <img src="https://images.dmca.com/Badges/dmca-badge-w200-5x1-08.png?ID=1cb8cd83-64a2-458b-b5d3-341c3eaf3d40" alt="DMCA.com Protection Status" style="width: 181px;" />--}}
{{--                            </a>--}}
                            <!-- <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> -->
                            <!-- <a href="//www.dmca.com/Protection/Status.aspx?ID=1cb8cd83-64a2-458b-b5d3-341c3eaf3d40" title="DMCA.com Protection Status" class="dmca-badge">
                                <img src="https://images.dmca.com/Badges/dmca-badge-w200-5x1-08.png?ID=1cb8cd83-64a2-458b-b5d3-341c3eaf3d40" alt="DMCA.com Protection Status" style="width: 181px;" />
                            </a>
                            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> -->

                            <div class="darkTheme_lightThemeButton d-flex ml-auto mr-0">
                                <i class="zmdi zmdi-sun"></i>
                                <i class="zmdi zmdi-brightness-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery_boy">
            <img src="{{asset("Front/images/delivery.png")}}" class="img-fluid w-100" alt="" loading="lazy">
        </div>
    </footer>
    <!--Footer  section end-->
</div>

<!--Category menu Start-->
<div class="categoryMenu" id="categoryMenu">
    <!-- <div class="MenuHeader py-5 col-11 col-md-10 mx-auto px-0">
        <h2 class="d-flex">Mobile App Categories
            <span class="mr-0 ml-auto" id="cloesMenu">
                <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;"></i>
            </span>
        </h2>
    </div> -->
    <div class="d-flex">
        <h2 class="header_text">{{__("Company Category")}}</h2>
        <div class="w-100" style="padding-top: 40px;">
            <div class="list-group d-block col-12 col-md-12 col-xl-12 mx-auto px-0">
                <div class="row">
                    @foreach(\App\Models\Service::all() as $service)
                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{route("front.services",$service->id)}}" class="list-group-item list-group-item-action">
                            <div class="item-header d-flex">
                                <h5 class="mb-1"> @if(app()->getLocale() == "ar") {{$service->name}} @else {{$service->name_en}} @endif </h5>
                                <div class="img_box mr-0 ml-0">
                                    <img src="{{ asset('storage/'.$service->image) }}" class="img-fluid" alt="Crypto & NFT" loading="lazy">
                                </div>
                            </div>
                            <div class="text_box">
                                <p>
                                    @if(app()->getLocale() == "ar")  {{$service->description}} @else {{$service->description_en}} @endif
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{route("front.about.us")}}" class="list-group-item list-group-item-action">
                            <div class="item-header d-flex">
                                <h5 class="mb-1">{{__("About Us")}}</h5>
                                <div class="img_box mr-0 ml-0">
                                    <img src="{{asset("Front/images/Online classes.png")}}" class="img-fluid" alt="Social, Chatting & Calling" loading="lazy">
                                </div>
                            </div>
                            <div class="text_box">
                                <p>
                                    @if(app()->getLocale() == "ar") {{\App\Models\about_us::latest()->first()->about_us}} @else {{\App\Models\about_us::latest()->first()->about_us_en}} @endif
                                </p></div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{route("front.team.member")}}" class="list-group-item list-group-item-action">
                            <div class="item-header d-flex">
                                <h5 class="mb-1">{{__("Team")}}</h5>
                                <div class="img_box mr-0 ml-0">
                                    <img src="{{asset("Front/images/team.png")}}" class="img-fluid" alt="Social, Chatting & Calling" loading="lazy">
                                </div>
                            </div>
                            <div class="text_box">
                                <p>{{__("We have a great team that takes pride in doing business with efficiency and high quality")}}</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;" id="cloesMenu"></i>
    </div>



</div>
<!--Category menu end-->
@if(isset(App\Models\Websit::latest()->first()->whatsapp))
<div class="social">
    <ul>
        <li><a href="{{App\Models\Websit::latest()->first()->whatsapp}}" target="_blank"><img src="{{asset("Front/images/whatsapp.png")}}" alt=""></a></li>

    </ul>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="js/popper.min.js"></script> -->
<script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Front/js/wow.min.js')}}"></script>
<script src="{{asset('Front/js/app.js')}}"></script>
@yield("script")
</body>
</html>
