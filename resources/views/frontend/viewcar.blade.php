@extends('layouts.frontend')

@section('content')

    <div class="pages-jumbotron rounded-0 text-white">
            <div id="content" class="container">
                <div class="col-md-8 mt-5">
                    <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                </div>
            </div>
        </div>

    <div id="car-details">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                @foreach (json_decode($details->images, true) as $img)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ asset('../uploads/cars/' . Str::lower(str_replace(' ', '', $details->make . $details->model . $details->year)) . '/' . $img) }}" class="card-img-top" alt="{{ $details->make }}" width="550" height="400">
                                    </div>
                                @endforeach
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1>{{ $details->make }} {{ $details->model }} {{ $details->year }}</h1>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">CASH PRICE</small>
                                <h5>KES {{ number_format($details->price) }}</h5>
                            </div>
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">MONTHLY</small>
                                <h5 class="font-weight-bold">KES {{ number_format((0.0208 * ($details->price * 0.5) * 24 + $details->price * 0.5) / 24) }} </h5>
                            </div>
                            <div class="col-md-4">
                                <small class="titles font-weight-bold">DEPOSIT</small>
                                <h5>KES {{ number_format($details->price * 0.5) }}</h5>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">Location</small>
                                <h5> {{ Str::upper($details->location) }}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                @if ($details->mileage == 0)
                                    <p><strong class="titles" >Mileage: </strong> </p>
                                @else
                                    <p><strong class="titles" >Mileage: </strong> {{ $details->mileage }} </p>
                                @endif
                                <p><strong class="titles" >Fuel Type: </strong> {{ $details->fuel_type }} </p>
                                <p><strong class="titles" >Color: </strong> {{ $details->color }} </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong class="titles" >Transmission: </strong> {{ $details->transmission }} </p>
                                <p><strong class="titles" >Engine Capacity: </strong> {{ $details->engine_capacity }} </p>
                                <p><strong class="titles" >Registration: </strong> {{ $details->registration }} </p>
                            </div>
                        </div>
                        <div class="row mt-5 pl-3">
                            <a href="{{ url('applicant-register/' . $details->id) }}" class="btn font-weight-bold">Reserve & Buy this Car</a>
                        </div>
                    </div>
                </div>


                <div class="row mt-3 mb-5 pl-3">

                    <div class="col-md-12">

                        <h4 class="titles text-uppercase font-weight-bold">Features</h4>

                        <div class="row mt-2 pl-2 text-white">
                            <ul class="nav nav-tabs rounded-0 text-dark" role="tablist" style="background-color: #fece00;">
                                <li class="nav-item">
                                    <a class="pt-3 pb-3 nav-link active text-uppercase font-weight-bold pl-5 pr-5" data-toggle="tab" href="#home">Interior</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pt-3 pb-3 nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu1">Exterior</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pt-3 pb-3 nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu2">Safety and Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pt-3 pb-3 nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu3">Performance</a>
                                </li>
                            </ul>


                            <div class="tab-content">
                                <div id="home" class="container tab-pane active mt-5 mb-5"><br>
                                    <div class="row mb-5">
                                        @foreach (json_decode($details->interior_features, true) as $detail)
                                            <div class="col-md-4 pt-4 pb-4  bg-dark">
                                                <div class="d-flex border-right">
                                                    <div class="col-md-12">
                                                        <p>{{ Str::upper($detail) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div id="menu1" class="container tab-pane fade mt-5 mb-5"><br>
                                    <div class="row mb-5">
                                        @foreach (json_decode($details->exterior_features, true) as $detail)
                                            <div class="col-md-4 pt-4 pb-4  bg-dark">
                                                <div class="d-flex border-right">
                                                    <div class="col-md-12">
                                                        <p>{{ Str::upper($detail) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div id="menu2" class="container tab-pane fade mt-5 mb-5"><br>
                                    <div class="row mb-5">
                                        @foreach (json_decode($details->safety_features, true) as $detail)
                                            <div class="col-md-4 pt-4 pb-4  bg-dark">
                                                <div class="d-flex border-right">
                                                    <div class="col-md-12">
                                                        <p>{{ Str::upper($detail) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div id="menu3" class="container tab-pane fade mt-5 mb-5"><br>
                                    <div class="row mb-5">
                                        @foreach (json_decode($details->performance_features, true) as $detail)
                                            <div class="col-md-4 pt-4 pb-4  bg-dark">
                                                <div class="d-flex border-right">
                                                    <div class="col-md-12">
                                                        <p>{{ Str::upper($detail) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
