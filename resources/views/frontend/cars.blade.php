@extends('layouts.frontend')

@section('content')


    <div class="pages-jumbotron rounded-0 text-white">
        <div id="content" class="container">
            <div class="col-md-8">
                <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
            </div>
        </div>
    </div>

    <div id="car-search">
        <div class="container">
            <div class="row">
                <h3>Search car</h3>
                <p>Browse over a wide range of high-quality new and used cars. Whether you’re buying or financing, complete your purchase entirely online and choose home delivery or collection from Kommute designated yards. For total peace of mind, every car comes with a 30-Day service guarantee. </p>

                <p> Thorough inspections by buyer is advised. Terms and conditions apply. Offers may be varied, withdrawn or extended at any time. The quotation given is not a binding offer to enter into a finance agreement. Financing available subject to credit acceptance to Kenyan citizens aged 18 or over.

                <p>Guarantees and indemnities may be required. Please ensure the finance quotation meets your needs making sure you can afford the repayments without causing undue hardship.</p>
            </div>

            <div class="row">
                <div class="container pt-5 pb-4">
                    <div class="row">
                        <div class="col-12">
                            <form action="/search-car" method="GET" role="search">
                                <input type="text" name="car" class="search-bar form-control pt-4 pb-4 shadow-sm" placeholder="Search your car here">
                                <button type="submit" class="btn btn-warning mt-3 pr-5 pl-5">Search Car</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($vehicles as $vehicle)
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div>
                            <div class="card mt-5 mb-5 shadow rounded-0 border-0">
                                <img src="{{ asset('../uploads/displayimage/' . $vehicle->make . $vehicle->model . $vehicle->year . '/' . $vehicle->display_image) }}" class="card-img-top" alt="{{ $vehicle->make }}" height="250">

                                <div class="card-body">
                                    <h4 class="card-title">{{ $vehicle->make }} {{ $vehicle->model }} {{ $vehicle->year }}</h4>

                                    @if ($vehicle->mileage == 0)
                                        <span class="badge bg-light mr-5 mt-1">Mileage </span><br>
                                    @else
                                        <span class="badge bg-light mr-5 mt-1">Mileage {{ $vehicle->mileage }}</span><br>
                                    @endif

                                    <span class="badge bg-light mr-5 mt-1">Year  {{ " " }}  {{ $vehicle->year }} </span>
                                    <span class="badge bg-light mr-5 mt-1">Location {{ Str::upper($vehicle->location) }} </span>
                                    <h6 class="mt-2  font-weight-bold"><strong>Cash Price</strong>: <strong class="cash-price"> KES {{ number_format($vehicle->price) }} </strong></h6>

                                    <h6 class="mt-3 text-muted">Monthly Payment</h6>
                                    <h5 class="mb-3 font-weight-bold">KES {{ number_format((0.0208 * ($vehicle->price * 0.5) * 24 + $vehicle->price * 0.5) / 24) }}</h5>

                                    <a href="{{ url('view-car/' . $vehicle->id) }}" class="btn btn-block btn-warning pt-2 pb-2 pr-5 pl-5">view this car</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
