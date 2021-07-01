@extends('layouts.admin')

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Vehicle Information
                        </h3>
                    </div>
                    <div>
                        <span class="m-subheader__daterange" >
                            <span class="m-subheader__daterange-label">
                                <strong> {{ date('D,   M d Y h:i a') }} </strong>
                                <span class="m-subheader__daterange-title"></span>
                                <span class="m-subheader__daterange-date  m--font-brand"></span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        <!-- END: Subheader -->

        <div class="m-content">

                <div class="row">

                    <div class="col-xl-12 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_vehicle_profile_tab_1" role="tab">
                                                <i class="flaticon-share m--hide"></i>
                                                 vehicle Information
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div>
                                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h5 class="m-form__section">
                                                        vehicle Information
                                                    </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Make
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $vehicles->make }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Model
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $vehicles->model }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Registration
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $vehicles->registration }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Year
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->year }}  </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Mileage
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->mileage }}  </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Transmission
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->transmission }}  </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Fuel Type
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->fuel_type }}  </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Engine Capacity
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->engine_capacity }}  </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Engine Number
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->engine_number }}  </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Chasis Number
                                                </label>
                                                <div class="col-md-4">
                                                    <h5>  {{ $vehicles->chasis_number }}  </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Color
                                                </label>
                                                <div class="col-md-7">
                                                    <h5>  {{ $vehicles->color }}  </h5>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Features
                                                </label>
                                                <div class="col-md-4">
                                                    <ul>
                                                        @foreach (json_decode($vehicles->interior_features, true) as $detail)
                                                            <li>
                                                                <h5> {{ $detail }} </h5>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        @foreach (json_decode($vehicles->exterior_features, true) as $detail)
                                                            <li>
                                                                <h5> {{ $detail }} </h5>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">

                                                </label>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <ul>
                                                        @foreach (json_decode($vehicles->safety_features, true) as $detail)
                                                            <li>
                                                                <h5> {{ $detail }} </h5>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        @foreach (json_decode($vehicles->performance_features, true) as $detail)
                                                            <li>
                                                                <h5> {{ $detail }} </h5>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Images
                                                </label>

                                                <div class="row">

                                                    @foreach( json_decode($vehicles->images, true) as $img)
                                                        <div class="col-md-5 mr-3 ml-3">
                                                            <h5> <img src="{{ asset('/uploads/cars/'. Str::lower(str_replace(' ', '', $vehicles->make . $vehicles->model . $vehicles->year)) . '/' . $img) }}" class="mt-3 mb-3" alt="" width="450" height="350"></h5>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--End::Section-->
        </div>
    </div>
</div>
<!-- end:: Body -->

@endsection

































