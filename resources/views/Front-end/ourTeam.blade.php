@extends('layouts.front-end')
@section("title","Team Member | United South")

@section('content')

    <!--banner section start-->
    <div class="banner pt-3 overflow-hidden  px-lg-4">

        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 mx-auto pl-lg-5">
            <div class="row align-items-end pl-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  pb-0 pb-lg-5 wow fadeInLeft" data-wow-duration=".5s">
                    <div class="banner_text pb-0 mb-lg-4">
                        <h1 class="text-center text-lg-left">{{__("Team")}}</h1>
                        <h3 class="text-center text-lg-left">{{__("We have a great team that takes pride in doing business with efficiency and high quality")}}</h3>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex">
                    <div class="category_img wow fadeInUp mx-auto ml-lg-0 mr-lg-auto pb-5 pb-lg-0" data-wow-duration="0.5s">
                        <img src="{{asset("Front/images/team.png")}}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner section end-->

    <!--Products section start-->
    <section class="padding-bottom padding-top  team_member" id="products">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 px-0 mx-auto px-lg-4">
            <!--                Tab Content start-->
            <div class="tab-content pt-0 ">
                <div class="tab-pane fade show active " id="All_Products " role="tabpanel " aria-labelledby="All_Products_tab ">
                    <div class="container-fluid ">

                        <div class="row ">
                            @isset($teamMembers)
                                @foreach($teamMembers as $teamMember)
                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
                                <div class="card" style="width: 100%;">
                                    <div class="img_of_member">
                                        <img src="{{ asset('storage/'.$teamMember->image) }}" class="card-img-top img-fluid" alt="...">

                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">@if(app()->getLocale() == "ar") {{$teamMember->name}} @else {{$teamMember->name_en}}  @endif</h4>
                                        <p class="card-text">{{__("We are delighted to have him on our team")}}</p>
                                        <p class="card-text work_name">{{__("Work")}} : <span>{{$teamMember->position}}</span></p>
                                    </div>
                                </div>

                            </div>
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
