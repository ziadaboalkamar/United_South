@extends('layouts.front-end')
@section("title","About Us | United South")

@section('content')

    <!--banner section start-->
    <div class="banner pt-3 overflow-hidden  px-lg-4">

        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 mx-auto pl-lg-5">
            <div class="row align-items-end pl-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  pb-0 pb-lg-5 wow fadeInLeft" data-wow-duration=".5s">
                    <div class="banner_text pb-0 mb-lg-4">
                        <h1 class="text-center text-lg-left">@if(app()->getLocale() == "ar") {{$service->name}} @else {{$service->name_en}} @endif </h1>
                        <h3 class="text-center text-lg-left">
                            @if(app()->getLocale() == "ar") {{$service->description}} @else {{$service->description_en}} @endif
                        </h3>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex">
                    <div class="category_img wow fadeInUp mx-auto ml-lg-0 mr-lg-auto pb-5 pb-lg-0" data-wow-duration="0.5s">
                        <img src="{{ asset('storage/'.$service->image) }}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner section end-->

    <!--Products section start-->
    <section class="padding-bottom padding-top products" id="products">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 px-0 mx-auto px-lg-4">
            <!--                Tab Content start-->
            <div class="tab-content pt-0 ">
                <div class="tab-pane fade show active " id="All_Products " role="tabpanel " aria-labelledby="All_Products_tab ">
                    <div class="container-fluid ">

                        <div class="row ">
                            @isset($service->projects)
                                @foreach($service->projects as $project)
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #faa61a">
                                            <a class="d-flex w-100" href="{{route("front.project",$project->id)}}">
                                                <div class="text-box">
                                                    <h2>@if(app()->getLocale() == "ar") {{$project->title}} @else {{$project->title_en}} @endif </h2>
                                                    <h3>@if(app()->getLocale() == "ar") {!!  substr(strip_tags($project->description), 0, 100) !!} @else {!!  substr(strip_tags($project->description_en), 0, 60) !!} @endif</h3>
                                                    {{--{{dd($service->projects[0]["title_en"])}}--}}
                                                    {{--                                                        <div class="icon_box">--}}
                                                    {{--                                                            <i><img src="images/ic_ionic.png" class="ionic" alt=""></i>--}}
                                                    {{--                                                        </div>--}}
                                                </div>
                                                <div class="img_box">
                                                    <img src="{{ asset('storage/'.$project->main_image) }}" alt="Doctopro - Doctor Appointment Booking App, Hospital management POS system at opus labworks" class="img-fluid wow slideInUp" data-wow-duration=".5s" loading="lazy">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    {{--{{dd($service->projects)}}--}}
                                @endforeach
                            @endisset
                        </div>

                    </div>
                </div>
            </div>
            <!--                Tab Content end-->
        </div>
    </section>
    <!--Products section end-->

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
