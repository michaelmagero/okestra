@extends('layouts.frontend')

@section('content')

        <div class="jumbotron rounded-0 text-white">
            <div id="content" class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mt-5">
                        <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                        <p class="lead">Search, Reserve and Buy your Dream Car All on one platform</p><br>
                        <a class="btn btn-warning btn-lg landing-btn" href="{{ url('/products') }}">Discover Kommute <span><i class="fa fa-arrow-right"></i></span> </a>
                    </div>
                </div>

                <div id="app">
                    <Calculator />
                </div>
            </div>
        </div>

        <div id="cars">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h3>Browse Our Collection</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($vehicles->take(4) as $vehicle)
                        <div class="col-xs-6 col-md-3">
                            <div>
                                <div class="card mt-5 mb-5 shadow rounded-0 border-0">
                                    <img src="{{ asset('../uploads/displayimage/' . Str::lower(str_replace(' ', '', $vehicle->make . $vehicle->model . $vehicle->year)) . '/' . $vehicle->display_image) }}" class="card-img-top" alt="{{ $vehicle->make }}" height="200">

                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">{{ ucfirst(trans( $vehicle->make . " " . $vehicle->model . " " . $vehicle->year)) }}</h6>

                                        @if ($vehicle->mileage == 0)
                                            <span class="badge bg-light mr-5 mt-1">Mileage </span><br>
                                        @else
                                            <span class="badge bg-light mr-5 mt-1">Mileage {{ $vehicle->mileage }}</span><br>
                                        @endif

                                        <span class="badge bg-light mr-5 mt-1">Year  {{ " " }}  {{ $vehicle->year }} </span>
                                        <span class="badge bg-light mr-5 mt-1">Location {{ Str::upper($vehicle->location) }} </span>
                                        <h6 class="mt-2  font-weight-bold"><strong>Cash Price</strong>: <strong class="text-muted"> KES {{ number_format($vehicle->price) }} </strong></h6>

                                        <h6 class="mt-3 text-muted">Monthly Payment</h6>
                                        <h5 class="mb-3 font-weight-bold">KES {{ number_format((0.0208 * ($vehicle->price * 0.5) * 24 + $vehicle->price * 0.5) / 24) }}</h5>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url('view-car/' . $vehicle->id) }}" class="btn btn-warning pt-2 pb-2 pr-5 pl-5">View this car</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ url('/cars') }}" class="btn btn-warning pt-2 pb-2 pr-5 pl-5">View More Cars</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- what you get with kommute -->
        <div id="kommute-why">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="features-heading">Why Kommute</h3>
                </div>
                <div class="row mb-5 mt-5">
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-clock "></i>
                        <h5 class="mt-3">Fast Approvals</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-coins "></i>
                        <h5 class="mt-3">Waivers on Interest</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-headset "></i>
                        <h5 class="mt-3">Customer Support</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-credit-card "></i>
                        <h5 class="mt-3">No hidden Fees</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-award "></i>
                        <h5 class="mt-3">Quality Guranteed</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-laptop-house "></i>
                        <h5 class="mt-3">Hassle-Free</h5>
                    </div>
                </div>
            </div>
        </div>

        <div id="kommute-features">
            <div class="container">
                <div class="row">
                    <h3 class="features-heading">What Kommute Excels In</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-calendar-alt "></i>
                        <h5 class="mt-3">Repayments upto 24 months</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-tags "></i>
                        <h5 class="mt-3">Interest rate as low as 2% monthly</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-chart-line "></i>
                        <h5 class="mt-3">All vehicles financing</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-wallet "></i>
                        <h5 class="mt-3">50% of car value financing</h5>
                    </div>
                </div>
            </div>
        </div>

        <div id="cta">
            <div class="jumbotron text-center text-white rounded-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="display-4 font-weight-bold">In need of financing?</h1>
                            <p class="lead">Discover how much you will pay monthly to get your dream car</p>
                            <a href="{{ url('/cars') }}" class="btn btn-primary font-weight-bold">Search for Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="partners">
            <div class="container">
                <div class="row">
                    <h5 class="font-weight-bold ml-4 mb-5">We have partnered with</h5>
                </div>
                <div class="row">
                    <img src="../images/hotcars.jpeg" class="partner pl-2" alt="partner" width="160" height="150">
                </div>
            </div>
        </div>

@endsection
