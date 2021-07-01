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
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Names
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->name }} {{ $applications->middlename }} {{ $applications->surname }} </h5>
                                                </div>

                                                <label for="example-text-input" class="col-2 text-muted">
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
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    ID number
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->id_number }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Phone
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->phone }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Email
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->email }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Date of birth
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->dob }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    KRA PIN
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->kra_pin }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    County
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->county }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Locality
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->locality }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Street
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->street }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Apartment
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->apartment }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Employer
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->employer }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Net Income
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->net_income }} </h5>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Expenses
                                                </label>
                                                <div class="col-md-4">
                                                    <h5> {{ $applications->expenses }} </h5>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    National ID
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "National ID" }}</a>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Bank Statements
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "Bank Statements" }}</a>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    MPESA Statements
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "MPESA statements" }}</a>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    CR12 Certificate
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "CR12 certificate" }}</a>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    KRA Certificate
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "KRA certificate" }}</a>
                                                </div>
                                                <label for="example-text-input" class="col-2 text-muted">
                                                    Incorporation Cert.
                                                </label>
                                                <div class="col-md-4">
                                                    <a target="_blank" href="{{ asset('/uploads/applications/'. Str::lower(str_replace(' ', '', $applications->name . $applications->middlename . $applications->surname)) . '/' . $applications->national_id) }}" class="mt-3 mb-3" alt="">{{ $applications->name }} {{ $applications->surname }} {{ "Incorporation Cert." }}</a>

                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row pt-0">
                                                <label for="example-text-input" class="col-2 text-muted">
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

































