@extends('layouts.app')
@section('title', 'Detail Travel')
@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush
@section('content')
    <!-- main content -->
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Nusa Peninda</h1>
                            <p>Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/pic_details_1.jpg"
                                    class="xzoom",
                                    id="xzoom-default"
                                     xoriginal="frontend/images/pic_details_1.jpg"/>
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/pic_details_1.jpg">
                                        <img src="frontend/images/pic_details_1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_details_1.jpg">
                                    </a>
                                    <a href="frontend/images/pic_details_2.jpg">
                                        <img src="frontend/images/pic_details_2.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_details_2.jpg">
                                    </a>
                                    <a href="frontend/images/pic_details_3.jpg">
                                        <img src="frontend/images/pic_details_3.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_details_3.jpg">
                                    </a>
                                    <a href="frontend/images/pic_details_4.jpg">
                                        <img src="frontend/images/pic_details_4.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_details_4.jpg">
                                    </a>
                                    <a href="frontend/images/pic_details_5.jpg">
                                        <img src="frontend/images/pic_details_5.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_details_5.jpg">
                                    </a>

                                </div>

                            </div>
                            <h2>About Travel</h2>
                            <p>
                                    Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                            <p>There are two small islands nearby - Nusa Lembongan and Nusa Ceningan - which are included within the district (kecamatan). </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="frontend/images/ic_ticket.png" alt="" class="features-img">
                                        <div class="description">
                                                <h3>Featured Event</h3>
                                                <p>Tari Kecak</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                        <div class="description ">
                                            <img src="frontend/images/ic_bahasa.png" alt="" class="features-img">
                                            <div class="description">
                                                    <h3>Language</h3>
                                                    <p>bahasa Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                            <div class="description">
                                                <img src="frontend/images/ic_foods.png" alt="" class="features-img">
                                                <div class="description">
                                                        <h3>Foods</h3>
                                                        <p>Local foods</p>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>members are going</h2>
                            <div class="member my-2">
                                <img src="frontend/images/member-1.png" alt="" class="member-img mr-1">
                                <img src="frontend/images/member-2.png" alt="" class="member-img mr-1">
                                <img src="frontend/images/member-3.png" alt="" class="member-img mr-1">
                                <img src="frontend/images/member-4.png" alt="" class="member-img mr-1">
                                <img src="frontend/images/member-5.png" alt="" class="member-img mr-1">




                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                             <table class="trip-information">
                                 <tr>
                                     <th width="50%">Date of Departure</th>
                                     <td width="50%" class="text-right">22 Aug, 2019</td>
                                 </tr>
                                 <tr>
                                        <th width="50%">Duratione</th>
                                        <td width="50%" class="text-right">2D, 2N</td>
                                    </tr>
                                    <tr>
                                            <th width="50%">Type of trip</th>
                                            <td width="50%" class="text-right">Open Public</td>
                                        </tr>
                                        <tr>
                                                <th width="50%">Price</th>
                                                <td width="50%" class="text-right">$80/person</td>
                                            </tr>
                             </table>

                        </div>
                        <div class="join-container">
                        <a href="{{route('checkout')}}" class="btn btn-join-now btn-block mt-3 my-2">
                                Join Now
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('.xzoom, .xzoom-gallery').xzoom({
                    zoomWidth: 500,
                    title: false,
                    tint: '#ffff',
                    xoffset: 15,
                });
            });
        </script>
@endpush
