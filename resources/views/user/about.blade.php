@extends('user.layouts.main')

@section('main-container')
    <main>
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <span>About Hunger Free Mission</span>
                        <h2>Our Mission: Ending Hunger, One Meal at a Time</h2>
                    </div>
                    <p>At Hunger Free Mission, we are dedicated to ending hunger and reducing food wastage. Since our inception, we have facilitated the donation of over 7.5 lakh kilograms of quality prepared food from various food service providers in Rajkot.</p>
                    <p>In 2022 alone, we partnered with 200+ entities across 80+ food-service locations, including restaurants, airports, retailers, hotels, and more. Together, we donated 6.5 lakh kilograms of surplus food to over 500 hunger relief organizations.</p>
                    <p>Our team consists of passionate individuals with extensive experience in operations and food quality from major restaurant chains and retailers. All our full-time staff members are ServSafe® certified in food safety.</p>
                </div>
                <a href="/about" class="btn">Learn More About Us</a>
            </div>
            <div class="about-back-img ">
                            <img src="{{url('user/assets/img/gallery/new about.jpg')}}" height="610" alt="">
                        </div>
        </div>
    </div>
</section>

    <!-- About Law End-->


    </main>
    @endsection