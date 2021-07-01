
@extends('layouts.admin')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Edit Application
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-user/{{ $applications->id }}" autocomplete="off">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <div class="mr-auto">
                                                    <h6 class="m-form__section">
                                                        Personal Information
                                                    </h6>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">

                                                <div class="col-lg-6">
                                                    <label for="example-text-input" class="col-form-label">Application Status:</label>
                                                    <select class="form-control m-input" name="role" value="{{ old('role') }}" required>
                                                        <option hidden>
                                                        Select Role
                                                        </option>
                                                        <option value="{{ $applications->application_status }}" selected>
                                                            @if ($applications->application_status == 0)
                                                                {{ 'Pending' }}
                                                            @elseif ($applications->application_status == 1)
                                                                {{ 'Approved' }}
                                                            @elseif ($applications->application_status == 2)
                                                                {{ 'Rejected' }}
                                                            @endif
                                                        </option>
                                                        <option value="0">
                                                            Pending
                                                        </option>
                                                        <option value="1">
                                                            Approved
                                                        </option>
                                                        <option value="2">
                                                            Rejected
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6">
                                                    <label for="example-text-input" class="col-form-label">Loan Status:</label>
                                                    <select class="form-control m-input" name="role" value="{{ old('role') }}" required>
                                                        <option hidden>
                                                        Select Role
                                                        </option>
                                                        <option value="{{ $applications->loan_status }}" selected>
                                                            @if ($applications->loan_status == 0)
                                                                {{ 'Active' }}
                                                            @elseif ($applications->loan_status == 1)
                                                                {{ 'Complete' }}
                                                            @endif
                                                        </option>
                                                        <option value="0">
                                                            Active
                                                        </option>
                                                        <option value="1">
                                                            Complete
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-lg-7">
                                                        <button type="submit" class="btn btn-primary m-btn m-btn--air m-btn--custom">
                                                            Save Changes
                                                        </button>
                                                        &nbsp;&nbsp;
                                                        <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                            Cancel
                                                        </button>
                                                    </div>
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

































