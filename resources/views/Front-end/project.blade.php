@extends('layouts.front-end')
@section("title","About Us | United South")

@section('content')
    <div class="body_ineer">
        <div class="row no-gutters">
            <div class="col-12 col-lg-12 p-0">
                <!--banner section start-->
                <div class="banner">


                <div class="container-fluid col-sm-12 col-md-11 col-lg-11 col-xl-9 px-lg-4">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 pb-4 pb-lg-0 px-0">
                <div class="banner_text pt-0 pt-md-0 pt-lg-5">
                    <h3 class="text-center text-lg-left wow fadeInUp pb-3" data-wow-duration=".1s">@if(app()->getLocale() == "ar") {{$project->service->name}} @else {{$project->service->name_en}} @endif </h3>
                    <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-none d-lg-block" data-wow-duration=".3s">@if(app()->getLocale() == "ar") {{$project->title}} @else {{$project->title_en}} @endif </h1>

                    <div class="d-block d-lg-none pb-0 pb-lg-0 position-relative right_row_inner  right_row_innerMovile mb-5">
                        <!-- <div class="tabContentBg">
                        <img src="/images/phone_bg.jpg">
                    </div> -->



                    </div>

                    <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-block d-lg-none" data-wow-duration=".3s">Carpooling App, Ride Sharing App with Driver App & Rider App</h1>

                    <p class="text-center text-lg-left  wow fadeInUp m-0" data-wow-duration=".5s">
                        @if(app()->getLocale() == "ar") {{$project->description}} @else {{$project->description_en}} @endif
                    </p>


                    <div class="row align-items-center pt-5 pb-3 no-gutters">

                        <div class="col-12 col-md-6">
                            <p class="text-center text-lg-left wow fadeInUp m-0" style="font-weight: 400;" data-wow-duration=".8s">
                                <a id="contactUS_btn">{{__("Call us")}}</a> {{__("For complete application with administration panel.")}}
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="img_of_project">
                    <img src="{{ asset('storage/'.$project->main_image) }}" class="img-fluid" alt="{{$project->title}}">
                </div>
            </div>
        </div>
    </div>


    </div>
    <!--banner section end-->
    </div>


    </div>
    </div>


    <!-- Similar apps section start-->
    <section class="padding-bottom  products similar_apps pt-5" id="products">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 px-0 mx-auto px-lg-4">
            <!--                Tab Content start-->
            <div class="tab-content pt-0 ">
                <div class="tab-pane fade show active " id="All_Products " role="tabpanel " aria-labelledby="All_Products_tab ">
                    <div class="container-fluid ">
                        <h2 class="similar_apps_heading pb-4">مشاريع مشابها</h2>
                        <div class="row ">
                            @isset($relatedProjects)
                                @foreach($relatedProjects as $project)
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
                                    {{--{{dd($service->projects)}}--}}                                @endforeach
                            @endisset
                        </div>

                    </div>
                </div>
            </div>
            <!--                Tab Content end-->
        </div>
    </section>
    <!--Similar apps section end-->

    @endsection
@section("script")
    <script>

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
