@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
        <!-- Header -->
        <header class="text-center overlay">
            <h1>Explore the beautiful World
            </br>As easy one click</h1>
            <p class="mt-3">
                    You will see beautiful
            </br> moment you never see before
            </p>
            <a href="#" class="btn btn-get-started px-4 mt-4">
                Get Started
            </a>
        </header>

        <!-- main content -->
        <main>
            <!-- statistic -->
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-3 col-md-2 stats-details">
                        <h2>20K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>3K</h2>
                        <p>Hotels</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>72</h2>
                        <p>Partner</p>
                    </div>
                </section>
            </div>

            <!-- popular section -->
                <section class="section-popular" id="popular">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center
                            section-popular-heading">
                                <h2>Wisata Popular</h2>
                                <p>Somethings that you never try
                                </br>  before in this world</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- popular content -->
                <section class="section-popular-content" id="popularContent">
                    <div class="container">
                        <div class="section-popular-travel row justify-content-center">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('frontend/images/popular_1.jpg');">
                                    <div class="travel-country">INDONESIA</div>
                                    <div class="travel-location">UBUD, BALI</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('frontend/images/popular_2.jpg');">
                                        <div class="travel-country">UNI EMIRATE ARAB</div>
                                        <div class="travel-location">HARBOUR, DUBAI</div>
                                        <div class="travel-button mt-auto">
                                        <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="card-travel text-center d-flex flex-column"
                                        style="background-image: url('frontend/images/popular_3.jpg');">
                                            <div class="travel-country">INDONESIA</div>
                                            <div class="travel-location">BROMO, MALANG</div>
                                            <div class="travel-button mt-auto">
                                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                                    View Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('frontend/images/popular_1.jpg');">
                                    <div class="travel-country">EGYPT</div>
                                    <div class="travel-location">AGUNG RIZA</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- section network -->
                <section class="section-network">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>
                                    Our Network
                                </h2>
                                <p>
                                        Companies are trusted us
                                        </br>more than just a trip
                                </p>
                            </div>
                            <div class="col-md-8 text-center">
                                <img src="frontend/images/partner.png" alt="" class="img-partner" />
                            </div>
                        </div>
                    </div>
                </section>

                <!-- section testimonial -->
                <section class="section-testimonial-heading" id="testimonialHeading">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <h2>They’re Loving us</h2>
                                <p>Moment’s were giving them
                                </br> the best experience</p>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- section testimonial content -->
                <section class="section-testimonial-content" id="testimonialContent">
                    <div class="container">
                        <div class="section-popular-travel row justify-content-center match-height">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="card card-testimonial text-center">
                                    <div class="testimonial-content">
                                        <img src="frontend/images/testimonial_1.png"
                                        alt="user" class="mb-4 rounded-circle">
                                        <h3 class="mb-4">Angga Rizky</h3>
                                        <p class="testimonial">It was Glorious and I cloud
                                                not stop to say wohoo for
                                                every single moment
                                                Dankeee</p>
                                    </div>
                                    <hr/>
                                <p class="trip-to mt-2">Trip to Ubud</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="card card-testimonial text-center">
                                    <div class="testimonial-content">
                                        <img src="frontend/images/testimonial_2.png"
                                        alt="user" class="mb-4 rounded-circle">
                                        <h3 class="mb-4">Michele Langelo</h3>
                                        <p class="testimonial">IIt was my beautiful day with
                                            Ahnaf Travel</p>
                                    </div>
                                    <hr/>
                                <p class="trip-to mt-2">Trip to Dubai</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="card card-testimonial text-center">
                                    <div class="testimonial-content">
                                        <img src="frontend/images/testimonial_3.png"
                                        alt="user" class="mb-4 rounded-circle">
                                        <h3 class="mb-4">Ja'far Yahya</h3>
                                        <p class="testimonial">It was my new Experienxe umroh
                                            with Ahnaf Travel</p>
                                    </div>
                                    <hr/>
                                <p class="trip-to mt-2">Trip to makkah</p>
                                </div>
                            </div>


                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                                        I need Help
                                    </a>
                                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                                        Get Started
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </main>

@endsection
