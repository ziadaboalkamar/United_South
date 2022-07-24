@extends('layouts.front-end')
@section("title","About Us | United South")

@section('content')
    <!--banner section start-->
    <div class="banner pt-3 overflow-hidden  px-lg-4">

        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 mx-auto pl-lg-5">
            <div class="row align-items-end pl-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  pb-0 pb-lg-5 wow fadeInLeft" data-wow-duration=".5s">
                    <div class="banner_text pb-0 mb-lg-4">
                        <h1 class="text-center text-lg-left">{{__("About Us")}}</h1>
                        <h3 class="text-center text-lg-left">
                            @if(app()->getLocale() == "ar") {{$aboutUs->about_us}} @else {{$aboutUs->about_us_en}} @endif

                        </h3>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex">
                    <div class="category_img wow fadeInUp mx-auto ml-lg-0 mr-lg-auto pb-5 pb-lg-0" data-wow-duration="0.5s">
                        <img src="{{asset("Front/images/Online classes.png")}}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner section end-->

    <!--Products section start-->
    <section class="padding-bottom padding-top about_us">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 px-0 mx-auto px-lg-4">
            <!--                Tab Content start-->
            <div class="tab-content pt-0 ">
                <div class="tab-pane fade show active " id="All_Products " role="tabpanel " aria-labelledby="All_Products_tab ">
                    <div class="container-fluid ">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>{{__("Vision")}}</h2>
                                <p>
                                    @if(app()->getLocale() == "ar") {{$aboutUs->vision}} @else {{$aboutUs->vision_en}} @endif

                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="img_of_vission">
                                    <img src="{{asset("Front/images/vision.png")}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>{{__("Target")}}</h2>

                                <p>
                                    @if(app()->getLocale() == "ar") {{$aboutUs->target}} @else {{$aboutUs->target_en}} @endif

                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>{{__("Message")}}</h2>
                                <p>
                                    @if(app()->getLocale() == "ar") {{$aboutUs->message}} @else {{$aboutUs->message_en}} @endif

                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--                Tab Content end-->
        </div>
    </section>
    <!--Products section end-->
    <!-- partner section -->
    <section class="partner_section padding-bottom padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading text-center">{{__("Partner")}}</h2>

                </div>
                <div class="col-lg-12">
                    <div class="partner_carousal owl-carousel owl-theme">
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/cashbox.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/Sophos-logo.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/marr.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/camscan.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/aswar.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="img_of_partner">
                                        <img src="{{asset("Front/images/stoprm-removebg-preview.png")}}" class="" width="100%" height="154px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end partner section -->

    @endsection
@section("script")
    <script>
        $('.partner_carousal').owlCarousel({
            rtl:true,
            loop: true,
            items: 3,
            autoplay: false,
            smartSpeed: 2000,
            responsiveClass: true,
            nav: false,
            dots: true,
            margin: 30,
            stagePadding: 50,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                    stagePadding: 10,
                },
                1199: {
                    items: 2,
                    margin: 10,
                    stagePadding: 10,
                    autoWidth: true,
                },
            },
        });
        new WOW().init();
        $("#openMenu").click(function() {
            $("#categoryMenu").addClass("active");
            $("body").addClass("no-scroll");
        });
        $("#cloesMenu").click(function() {
            $("#categoryMenu").removeClass("active");
            $("body").removeClass("no-scroll");
        });
        $(".list-group-item").click(function() {
            $("#categoryMenu").removeClass("active");
        });
        $(".darkTheme_lightThemeButton").click(function() {
            $("body").toggleClass("dark_theme");
        });
    </script>

    <script>
        butter.init({
            cancelOnTouch: true
        });
    </script>
@endsection
