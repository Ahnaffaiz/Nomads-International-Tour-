@extends('layouts.checkout')
@section('title', 'Checkout')
@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.css')}}">
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
                                    <li class="breadcrumb-item">Details</li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>Who’s going?</h1>
                                <p>Trip to Ubud, Bali, Indonesia</p>
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><img src="{{url('frontend/images/avatar-1.png')}}" height="60px"></td>
                                            <td class="align-middle">Angga Rizky</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                <img src="{{url('frontend/images/remove_icon.png')}}" height="20px">
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                        <td><img src="{{url('frontend/images/avatar-2.png')}}" height="60px"></td>
                                            <td class="align-middle">Ridwan Hidayat</td>
                                            <td class="align-middle">AU</td>
                                            <td class="align-middle">30 Days</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                <img src="{{url('frontend/images/remove_icon.png')}}" height="20px">
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2"
                                    id="inputUsername" placeholder="Username" name="inputUsername">

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa"
                                    id="inputVisa"
                                    class="custom-select mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 days</option>
                                    <option value="N/A">N/A</option>
                                </select>
                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-grup mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="Doe Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>

                                </form>

                                <h6 class="mt-2 mb-0">Note</h6>
                                <p class="disclaimer">
                                    You are only able to invite member that has registered in Ahnaf Travel’s
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-details card-right">

                                <h2>Checkout Information</h2>
                                <table class="trip-information">
                                     <tr>
                                         <th width="50%">Members</th>
                                         <td width="50%" class="text-right">2 Person</td>
                                     </tr>
                                     <tr>
                                            <th width="50%">Additional VISA</th>
                                            <td width="50%" class="text-right">$190,00</td>
                                        </tr>
                                        <tr>
                                                <th width="50%">Trip price</th>
                                                <td width="50%" class="text-right">$80,00 / person</td>
                                            </tr>
                                            <tr>
                                                    <th width="50%">Total Price</th>
                                                    <td width="50%" class="text-right">$280,00</td>
                                                </tr>

                                                <tr>
                                                    <th width="50%" class="text-total">Total(+Uniqeu Code)</th>
                                                    <td width="50%" class="text-right">
                                                        <span class="text-blue">$279,</span>
                                                        <span class="text-orange">33</span>
                                                    </td>
                                                </tr>
                                 </table>

                                <hr/>
                                 <h2> Payment Instructions</h2>
                                 <p class="payment-instructions">
                                    Please complete your payment before you continue the trip
                                 </p>

                                 <div class="bank">
                                     <div class="bank-item pb-3">
                                     <img src="{{url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                         <div class="description">
                                             <h3>PT Ahnaf ID</h3>
                                             <p>082 2129 214 12128
                                                 <br>
                                                  Bank Center Asia
                                                </p>

                                         </div>
                                         <div class="clearfix">

                                         </div>
                                     </div>
                                 </div>
                                 <div class="bank">
                                        <div class="bank-item pb-3">
                                        <img src="{{url('frontend/images/ic_bank.png')}}"
                                             alt="" class="bank-image">
                                            <div class="description">
                                                <h3>PT Ahnaf ID</h3>
                                                <p>082 2129 214 12128
                                                    <br>
                                                     Bank China Utara
                                                   </p>

                                            </div>
                                            <div class="clearfix">

                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="join-container">
                                <a href="checkout/success" class="btn btn-join-now btn-block mt-3 my-2">
                                    I Have Made Payment
                                </a>
                            </div>
                            <div class="text-center mt-3">
                                <a href="details.html" class="text-muted">
                                    cancel Booking
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
@endsection
@push('addon-script')
    <script src="{{url('frontend/libraries/gijgo/js/gijgo.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon : '<img src="{{url('frontend/images/ic_date.png')}}"">'
                }
            })
        });


    </script>
@endpush
