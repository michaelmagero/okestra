@extends('layouts.admin')

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Vehicles
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{ url('new-vehicle') }}" class="btn btn-warning font-weight-bold m-btn  m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-car font-weight-bold"></i>
                                        <span>New Vehicle</span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item"></li>
                        </ul>
                    </div>
			    </div>
                <div class="m-portlet__body">
                    <table class="table table-bordered table-striped " id="table">
                        <thead class>
                            <tr>
                                <th>Car</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Registration</th>
                                <th>Year</th>
                                <th>Mileage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td class="" tabindex="0">
                                        <div class="m-card-user m-card-user--sm">
                                            <div class="row">
                                                {{-- <div class="col-md-3">
                                                    <div class="m-card-user__pic">
                                                        <div class=""><img alt="" src="/images/avatar.png" width="40" height="40"><br>  </div>
                                                    </div>
                                                </div>  --}}
                                                <div class="col-md-12">
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name">{{$vehicle->make}} {{ $vehicle->model}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>{{ $vehicle->price }}</td>

                                    <td>{{ $vehicle->registration }}</td>

                                    <td>{{ $vehicle->color }}</td>

                                    <td>{{ $vehicle->year }}</td>

                                    <td>{{ $vehicle->mileage }}</td>

                                    <td>
                                        <a href="{{ url('show-vehicle/'. $vehicle->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('edit-vehicle/'. $vehicle->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('delete-vehicle/'. $vehicle->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Body -->
@endsection

































