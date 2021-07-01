@extends('layouts.frontend')

@section('content')
    <div class="pages-jumbotron rounded-0 text-white">
            <div id="content" class="container">
                <div class="col-md-8 mt-5">
                    <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                </div>
            </div>
        </div>


    <div id="features">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <h1>Our Products</h1>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img src="../images/carfinancing.jpeg" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6 content">
                                    <h4 class="text-secondary font-weight-bold pt-3">Car Finance</h4>
                                    <p class="pr-5">Apply for car financing all online and get approved within 6 hours. Repay your loan at attractive rates of as low as 2% p.m on reducing balance.</p>

                                    <a href="{{ url('/cars') }}" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img src="../images/logbookloans.jpeg" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6 content">
                                    <h4 class="text-secondary font-weight-bold pt-3">Logbook loans</h4>
                                    <p class="pr-5">Need Cash urgently. Kommute offers emergency loans at competitive rates with the security as your car logbook. Financing up to 50% value of car.</p>

                                    <a href="#" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img src="../images/dutyimports.jpeg" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6 content">
                                    <h4 class="text-secondary font-weight-bold pt-3">Duty Import Financing</h4>
                                    <p class="pr-5">Importing your car? Stress no more, Kommute will take all the burden, we got you</p>

                                    <a href="#" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        This service is almost ready, we are finalizing on it keep it Kommute and be the first one to know once it launches.
                    </div>
                </div>
            </div>
        </div>
@endsection
