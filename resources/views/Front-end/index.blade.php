@extends('layouts.front-end')
@section("title")
    {{ (App\Models\Websit::latest()->first()->websit_title ?? config('app.name', 'Laravel')) }}@endsection

@section('content')
    <!--    header end-->

    <!--banner section start-->
    <div class="banner padding-bottom pt-5 overflow-hidden">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11">
            <div class="row align-items-center px-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5  pb-4 pb-lg-0 wow fadeInLeft" data-wow-duration=".1s">
                    <div class="banner_text">
                        <h3 class="text-center text-lg-left">{{__("Your Ideas, Our Knowledge")}}</h3>
                        <h1 class="text-center text-lg-left">{{__("Let's make it happen.")}}</h1>
                    </div>
                    <div class="btn_box col-12 col-sm-8 col-md-8 col-lg-11 col-xl-9 px-0 mx-auto mx-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn primary_button rounded-pill">
                                    <a href="#products"><span>{{__("View Portfolio")}}</span></a></button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn primary_button rounded-pill btn-outline"> <a href="#product_introduced"><span>{{__("About Us")}}</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                    <div class="banner_img text-center wow fadeInRight" data-wow-duration="0.9s">
                        <img src="{{asset("Front/images/banner_img.png")}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner section end-->

    <!--Products section start-->
    <section class="padding-bottom  padding-top products  px-lg-4" id="products" dir="ltr">
        <div class="container-fluid col-sm-12 col-md-12 col-lg-11">
            <div class="row align-items-center no-gutters">
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="prevItem">
                    <i class="zmdi zmdi-chevron-left"></i>
                </div>
                <!--                Tab Button start-->
                <div class="col-12 col-sm-10 col-md-10 col-lg-11 col-xl-11 mx-auto">
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <div class="products-slider owl-carousel owl-theme">
                            @isset($services)
                                @foreach($services as $service)

                            <div class="item">
                                <a class=" border-0 nav-item nav-link active col" id="product_{{$service->id}}_tab" data-toggle="tab" href="#product_{{$service->id}}" role="tab" aria-controls="product_{{$service->id}}" aria-selected="true">
                                    <span> @if(app()->getLocale() == "ar") {{$service->name}} @else  {{$service->name_en}} @endif</span>
                                </a>
                            </div>
                                @endforeach
                            @endisset





                        </div>
                    </div>
                </div>
                <!--                Tab Button end-->
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="nextItem">
                    <i class="zmdi zmdi-chevron-right "></i>
                </div>
            </div>
            <!--                Tab Content start-->
            <div class="tab-content " id="nav-tabContent" dir="rtl">
                @isset($services)
                    @foreach($services as $service)

                        <div class="tab-pane product_{{$service->id}}_tab fade @if($service->id == 1) show active @endif" id="product_{{$service->id}}" role="tabpanel" aria-labelledby="product_{{$service->id}}_tab">
                            <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">

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




                                </div>
                            </div>

                            <div class="btn_box mx-auto col-8 col-sm-4 col-md-3 col-lg-3 col-xl-2 padding-top" id="products_btn_box">
                                <button type="button" id="show_more" class="btn primary_button rounded-pill btn-outline">
                                    <span>عرض المزيد</span>
                                </button>

                                <button type="button" id="show_less" class="btn primary_button rounded-pill btn-outline">
                                    <span>عرض اقل</span>
                                </button>
                            </div>
                        </div>
                    @endforeach

                @endisset

            </div>
            <!--                Tab Content end-->
        </div>
    </section>
    <!--Products section end-->



    <!--About section start-->
    <section class="padding-top about px-lg-0 pr-xl-5">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-12 px-3 px-lg-0 pr-xl-5" style="max-width: 91.666667%;">
            <div class="row align-items-end pr-xl-4">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9 pb-md-5 pb-lg-0">
                    <div class="row row no-gutters align-items-center px-3 px-xl-0">
                        <div class="col-12 col-lg-6">
                            <div class="img_box d-none d-lg-block wow fadeInRight" data-wow-duration=".5s">
                                <img src="{{asset('Front/images/aboutus.png')}}" class="img-fluid col-12 col-xl-11" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 wow fadeInUp pb-5 pt-lg-5 text-center text-lg-left" data-wow-duration=".8s">
                            <h2 class="heading pt-lg-3 text-center text-lg-left">{{__("About Us")}}</h2>
                            <p class="col-12 col-lg-11 col-xl-10 px-0 text-center text-lg-left">
                             @if(app()->getLocale() == "ar")   {{$about->about_us}} @else  {{$about->about_us_en}} @endif
                         </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 px-0">
                    <div class="happy_clients pb-5 pt-lg-0  px-xl-0 wow zoomIn" data-wow-duration=".5s">
                        <div class="row">
                            <div class="col-6 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                <div class="text_box">
                                    <h2 class="text-center">6000+ <span>{{__("Clients")}} </span></h2>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                <div class="text_box">
                                    <h2 class="text-center">200+ <span>{{__("App")}}</span></h2>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                <div class="text_box">
                                    <h2 class="text-center">4.8 <span>{{__("Client Rate")}}</span></h2>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-md-3 col-lg-6 col-xl-6">
                                <div class="text_box">
                                    <h2 class="text-center">250+ <span>{{__("System")}}</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="img_box d-block d-lg-none">
                        <img src="{{asset('Front/images/aboutus.png')}}" class="img-fluid w-100 col-md-5 mx-auto d-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About section end-->


    <!--how product introduced section start-->
    <section class="padding-top pb-4 product_introduced px-lg-4" id="product_introduced">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11">
            <h2 class="heading text-center">{{__("How product Introduced")}}</h2>
            <h3 class="sub_heading  text-center mx-auto col-12 col-sm-12 col-md-10 col-lg-6 col-xl-7">
                {{__("There are full research and testing processes before and after the development of any single product.")}}               </h3>

            <div class="introduced-row padding-top">
                <!-- Research start-->
                <div class="introduced row align-items-center align-items-lg-start ">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box">
                            <img src="{{ asset('storage/'.$projectStation->research_img) }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="progressTracker col-12 col-sm-12 col-md-2 col-lg-2 d-lg-block d-xl-block">
                        <h2 class="text-center mb-0 mt-4 mx-auto">01</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="text_box pt-4 col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11">
                            <h3 class="text-center text-md-left">{{__("Research")}}</h3>
                            <p class="text-center text-md-left">
                                @if(app()->getLocale() == "ar") {{$projectStation->research}} @else {{$projectStation->research_en}} @endif

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Research end-->

                <!-- Wireframing start-->
                <div class="introduced row align-items-center align-items-lg-start  align-items-xl-start">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box d-block d-sm-block d-md-none" data-wow-delay="0.1s">
                            <img src="{{ asset('storage/'.$projectStation->wireframe_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                        <div class="text_box pt-4 col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11" data-wow-delay="0.2s">
                            <h3 class="text-center text-md-right">{{__("Wireframing")}}</h3>
                            <p class="text-center text-md-right">
                                @if(app()->getLocale() == "ar") {{$projectStation->wireframe}} @else {{$projectStation->wireframe_en}} @endif

                            </p>
                         </div>
                    </div>
                    <div class="progressTracker col-12 col-sm-12 col-md-2 col-lg-2 d-lg-block d-xl-block">
                        <h2 class="text-center mb-0 mt-4 mx-auto">02</h2>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box d-none d-sm-none d-md-block">
                            <img src="{{ asset('storage/'.$projectStation->wireframe_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <!-- Wireframing end-->

                <!-- Designing start-->
                <div class="introduced row align-items-center align-items-lg-start  align-items-xl-start">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box">
                            <img src="{{ asset('storage/'.$projectStation->design_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="progressTracker col-12 col-sm-12 col-md-2 col-lg-2 d-lg-block d-xl-block">
                        <h2 class="text-center mb-0 mt-4 mx-auto">03</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="text_box pt-4 col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11">
                            <h3 class="text-center text-md-left">{{__("Designing")}}</h3>
                            <p class="text-center text-md-left">
                                @if(app()->getLocale() == "ar") {{$projectStation->design}} @else {{$projectStation->design_en}} @endif

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Designing end-->

                <!-- Development start-->
                <div class="introduced row align-items-center align-items-lg-start  align-items-xl-start">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box d-block d-sm-block d-md-none">
                            <img src="{{ asset('storage/'.$projectStation->development_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                        <div class="text_box pt-4 col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11">
                            <h3 class="text-center text-md-right">{{__("Development")}}</h3>
                            <p class="text-center text-md-right">
                                @if(app()->getLocale() == "ar") {{$projectStation->development}} @else {{$projectStation->development_en}} @endif
                            </p>
                        </div>
                    </div>
                    <div class="progressTracker col-12 col-sm-12 col-md-2 col-lg-2 d-lg-block d-xl-block">
                        <h2 class="text-center mb-0 mt-4 mx-auto">04</h2>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box d-none d-sm-none d-md-block">
                            <img src="{{ asset('storage/'.$projectStation->development_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <!--Development end -->

                <!-- Testing & Publish start-->
                <div class="introduced testing row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="img_box">
                            <img src="{{ asset('storage/'.$projectStation->testing_img) }}" class="img-fluid w-100" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="progressTracker col-12 col-sm-12 col-md-2 col-lg-2 d-lg-block d-xl-block">
                        <h2 class=" text-center  mb-0 mt-4 mx-auto">05</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 pb-5">
                        <div class="text_box pt-4 col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11">
                            <h3 class="text-center text-md-left">{{__("Testing & Publish")}}</h3>
                            <p class="text-center text-md-left">
                                @if(app()->getLocale() == "ar") {{$projectStation->testing}} @else {{$projectStation->testing_en}} @endif

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testing & Publish end-->
            </div>
        </div>
    </section>
    <!--how product introduced section end-->


    <!--Testimonials section start-->
@if(isset($testimonials) && count($testimonials) > 0 )
    <section class="py-4 testimonials">
        <div class="row mx-0 align-items-center no-gutters">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading_box pb-5 pb-lg-0 pb-lg-0 col-12 col-md-12 col-lg-12 col-xl-10">
                    <h2 class="heading  text-center text-lg-left">{{__("Testimonial")}}</h2>
                    <h3 class="sub_heading pb-0 text-center text-lg-left">{{__("Because your satisfaction is our priority")}}</h3>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="owl-carousel  testimonials_carousel owl-theme">

                        @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="item_inner">
                            <div class="background_img">
                                <img src="{{asset('Front/images/testimonial2.png')}}" alt="" loading="lazy">
                                <img src="{{asset('Front/images/testimonial2_dark.png')}}" alt="" loading="lazy">
                            </div>
                            <div class="text_box">
                                <p>
                                    @if(app()->getLocale() == "ar")   {{$testimonial->description}} @else   {{$testimonial->description_en	}} @endif

                                </p>

                                <h2>@if(app()->getLocale() == "ar") {{$testimonial->name}} @else {{$testimonial->name_en}} @endif </h2>
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif
    <!--Testimonials section end-->
    <!-- team member section start -->
    <section class="team_member padding-top padding-bottom">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11">
            <div class="row align-items-center ">
                <div class="col-lg-12 text-center">
                    <h2 class="heading text-center">{{__("Team Member")}}</h2>
                    <h3 class="sub_heading  text-center mx-auto col-12 col-sm-12 col-md-10 col-lg-6 col-xl-7">
                {{__("We have a great team that takes pride in doing business with efficiency and high quality")}}
                    </h3>
                </div>
                <div class="col-lg-12">
                    <div class="team_member_carousal owl-carousel owl-theme">
                        @isset($teamMembers)
                            @foreach($teamMembers as $teamMember)
                        <div class="item">
                            <div class="card" style="width: 18rem;">
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
    </section>
    <!-- team member section end -->
    <!--Contact Us section start-->
    <section class="padding-top padding-bottom contact_us px-lg-4" id="contactUs">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 pb-5 pb-lg-0">
                    <div class="img_box col-sm-12 col-md-11 col-lg-12 col-xl-11 mx-auto pb-md-5 pb-lg-0">
                        <img src="{{asset('Front/images/contact.png')}}" class="img-fluid col-10 col-xl-10" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading  text-center text-lg-left" data-wow-delay="0.1s">{{__("Contact us")}}</h2>
                    <h3 class="sub_heading pb-lg-4" data-wow-delay="0.2s">{{__("Feel free to connect for queries or feedback")}}</h3>
                    <form id="contact-form"  class="pt-4 pt-lg-0">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="*الاسم" id="contact-name" required>
                        </div>
                        <div class="form-group" data-wow-duration="1.2s">
                            <input type="email" name="email" class="form-control" placeholder="*البريد الالكتروني" id="contact-email" required>
                        </div>
                        <div class="form-group" data-wow-duration="1.2s">
                            <input type="text" name="whatsApp_number" class="form-control" placeholder="رقم الواتساب " id="contact-whatsapp">
                        </div>
                        <div class="form-group" data-wow-duration="1.4s">
                            <textarea name="message" id="contact-message" rows="5" class="form-control" placeholder="*رسالتك" required></textarea>
                        </div>
                        <button id="contact-button" type="submit" class="btn primary_button rounded-pill col-6 col-sm-4 col-md-4 col-lg-5 col-xl-3 " data-wow-duration="1.6">
                            {{__("Send")}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Us section end-->


    <!--Subscribe Us section start-->
    <section class="subscribe_us padding-top padding-bottom" id="subscribe">
        <div class="container-fluid col-sm-12 col-md-11 col-lg-11">
            <div class="row align-items-center pb-4">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading">{{__("Subscribe us")}}</h2>
                    <h3 class="sub_heading mb-3">{{__("Receive a notification from us about the download of any new project")}}</h3>
                    <form id="subscribe-form" class="row no-gutters align-items-center">
                        <div class="mb-0 form-group">
                            <input type="email" name="email" class="form-control" placeholder="الايميل" id="subscribe-email" required>
                        </div>

                        <button id="subscribe-button" type="submit" class="btn primary_button border-0">{{__("Subscribe us")}}</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-5 pb-lg-0 ">
                    <div class="img_box text-right col-sm-12 col-md-11 col-lg-12 col-xl-12 mx-auto pt-5 pt-md-5 pt-lg-0">
                        <img src="{{asset('Front/images/img_subscribe.png')}}" class="img-fluid w-100 wow col-12 col-xl-11" alt="">
                        <!-- <img src="images/contact.png" class="img-fluid w-100 wow fadeInLeft" data-wow-delay="0.3s"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe us section end-->

    @endsection
@section("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#show_more").click(function() {
                $("#All_Products").addClass("fullHight");
                $("#products_btn_box").addClass("fullHight");
            });

            $(".darkTheme_lightThemeButton").click(function() {
                $("body").toggleClass("dark_theme");
            });
        });

        $(document).ready(function() {
            $("#show_less").click(function() {
                $("#All_Products").removeClass("fullHight");
                $("#products_btn_box").removeClass("fullHight");
            });
        });

        var slider = $('.products-slider.owl-carousel');
        $('.products-slider.owl-carousel').owlCarousel({
            rtl:true,
            margin: 0,
            items: 3,
            dots: false,
            autoWidth: true,
            smartSpeed: 200,
        })

        $('#nextItem').click(function() {
            slider.trigger('next.owl.carousel');
        });

        $('#prevItem').click(function() {
            slider.trigger('prev.owl.carousel');
        });

        $(document).ready(function() {
            var a = $(".owl-item a ");
            $(".owl-item a").click(function() {
                a.removeClass('active');
            });
        });

        $('.testimonials_carousel').owlCarousel({
            rtl:true,
            loop: false,
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

        $('.team_member_carousal').owlCarousel({
            rtl:true,
            loop: false,
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

        $("#openMenu").click(function() {
            $("#categoryMenu").addClass("active");
            $("body").addClass("no-scroll");
        });
        $("#cloesMenu").click(function() {
            $("#categoryMenu").removeClass("active");
            $("body").removeClass("no-scroll");
        });
    </script>
    <script>
    new WOW().init();
    </script>
    <script>
        butter.init({
            cancelOnTouch: true
        });
    </script>
    <script>
        function subscribeEmail(event) {
            event.preventDefault();

            $("#subscribe-button").text('Subscribing...');
            var formData = {
                email: $("#subscribe-email").val(),

            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{route("client.subscribe")}}",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function (data) {
                $("#subscribe-email").val('');
                $("#subscribe-button").text('Subscribed');
            });

            return false;
        }
        $(document).ready(function () {
            // contact form submit
            $("#contact-form").submit(function (event) {
                event.preventDefault();
                $("#contact-button").text('Sending...');
                var formData = {
                    name: $("#contact-name").val(),
                    email: $("#contact-email").val(),
                    message: $("#contact-message").val(),
                    whatsApp_number: $("#contact-whatsapp").val(),
                };

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "{{route("client.contact")}}",
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    swal("تم الارسال!", "تم ارسال رسالتك بنجاح", "success");
                    console.log('ok');
                    $("#contact-name").val('');
                    $("#contact-email").val('');
                    $("#contact-message").val('');
                    $("#contact-whatsapp").val('');
                    $("#contact-button").text('Sent');
                });
            });

            // subscribe
            $("#subscribe-form").submit(function (event) {
                subscribeEmail(event)
            });
        });
    </script>
@endsection
