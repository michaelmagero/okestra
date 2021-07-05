@extends('layouts.admin')

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Applicant Information
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
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                                <i class="flaticon-share m--hide"></i>
                                                 Applicant Information
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div>
                                    @if(Auth::user()->role == 0)
                                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-user/{{ $applications->id }}">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-5 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Names
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->name }} {{ $applications->middlename }} {{ $applications->surname }} </h5>
                                                </div>

                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Status
                                                </label>
                                                <div class="col-md-4">
                                                    @if($applications->status == 0)
                                                        <h5 data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--warning m-badge--wide">{{ "Pending" }}</span></span></h5>
                                                    @elseif($applications->status == 1)
                                                        <h5 data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--success m-badge--wide">{{ "Approved" }}</span></span></h5>
                                                    @else
                                                        <h5></h5>
                                                    @endif
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    ID number
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->id_number }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Phone
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->phone }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Email
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->email }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Date of birth
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->dob }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    KRA PIN
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->kra_pin }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    County
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->county }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Locality
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->locality }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Street
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->street }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Apartment
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->apartment }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Employer
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->employer }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Net Income
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->net_income }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Expenses
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->expenses }} </h5>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    National ID
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "National ID" }}</a>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Bank Statements
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "Bank Statements" }}</a>
                                                </div>
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    MPESA Statements
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "MPESA statements" }}</a>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    CR12 Certificate
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "CR12 certificate" }}</a>
                                                </div>
                                            </div><hr>



                                            <div class="form-group m-form__group row pt-5">
                                                <label for="example-text-input" class="col-2 offset-2 text-dark">
                                                    <h4>Booked Car</h4>
                                                </label>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                @foreach ($vehicles as $vehicle)
                                                @if ($vehicle->id == $applications->vehicle_id)
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Make
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                        {{ $vehicle->make }}

                                                    </h5>
                                                </div>
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Model
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                         {{ $vehicle->model }}

                                                    </h5>
                                                </div>
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Year
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                         {{ $vehicle->year }}

                                                    </h5>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div><hr>

                                            <div class="form-group m-form__group row pt-0">
                                                @foreach ($vehicles as $vehicle)
                                                @if ($vehicle->id == $applications->vehicle_id)
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Color
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                        {{ $vehicle->color }}

                                                    </h5>
                                                </div>
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Engine
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                         {{ $vehicle->engine_number }}

                                                    </h5>
                                                </div>
                                                <label for="example-text-input" class="col-1 text-dark">
                                                    Chasis
                                                </label>
                                                <div class="col-md-3">
                                                    <h5>
                                                         {{ $vehicle->chasis_number }}

                                                    </h5>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div><hr>


                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-dark">
                                                    Created On
                                                </label>
                                                <div class="col-md-7">
                                                    <h5>  {{ $applications->created_at }}  </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    @else

                                    @endif
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

































