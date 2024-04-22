@extends('user.layouts.main')

@section('main-container')
    <main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                <div class="hero__caption">
                    <h1 style="padding-top:125px" data-animation="fadeInUp" data-delay=".6s">Help Us Fight Hunger<br>Together.</h1>
                    <p data-animation="fadeInUp" data-delay=".8s">Every day, countless people go to bed hungry. Join us in our mission to alleviate hunger by donating surplus food. Let's make a difference in someone's life today.</p>
                    <!-- Hero-btn -->
                    <div class="hero__btn">
                        <a href="/donate" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">Donate Now</a>
                        <a href="/contact" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                            <i class="flaticon-null"></i>
                            <p>+977 9825173216</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <div class="service-area pt-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Initiatives</span>
                    <h2>Empowering Communities Through Food</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-null-1"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="/">Food Recovery</a></h5>
                        <p>We collect surplus food from restaurants, events, and individuals to prevent it from going to waste.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-think"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="/">Food Distribution</a></h5>
                        <p>We distribute donated food to people in need, including homeless shelters, orphanages, and low-income communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-gear"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="/">Community Support</a></h5>
                        <p>We also provide support beyond food, including access to clean water, hygiene kits, and educational resources.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Services Area End -->
    
    
    <!-- Want To work -->
    <section class="wantToWork-area">
    <div class="container">
        <div class="wants-wrapper w-padding2 section-bg" style="background-image: url('{{url('user/assets/img/gallery/section_bg01.jpeg')}}'); background-color: #d580ff !important;">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Join Us in Changing the World Through Food Donation</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="/register" class="btn white-btn f-right sm-left">Become A Donor</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Want To work End -->
    </main>
   @endsection 