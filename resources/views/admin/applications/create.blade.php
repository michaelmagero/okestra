
@extends('layouts.admin')

@section('content')
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Create Staff
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="{{ url('/new-user') }}" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-5">
                                    <label>Names:</label>
                                    <input type="text" name="name" class="form-control m-input" value="{{ old('name') }}" required>

                                </div>
                                <div class="col-lg-5">
                                    <label class="">Email:</label>
                                    <input type="email" name="email" class="form-control m-input"  value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="">Role:</label>
                                    <select class="form-control m-input" name="role" required>
                                        <option hidden>
                                            Select Role
                                        </option>
                                        <option value="0">
                                            Admin
                                        </option>
                                        <option value="1">
                                            Customer
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            <!--end::Portlet-->
            <!--End::Section-->
        </div>
    </div>


    </div>
    <!--End::Section-->
    </div>
    </div>
    </div>
    <!-- end:: Body -->

@endsection
