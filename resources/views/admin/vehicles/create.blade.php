
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
                                    Add Vehicle
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST"
                            action="{{ url('new-vehicle') }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">

                                    <div class="col-lg-4">
                                        <label class="">Make:</label>
                                        <input type="text" name="make" class="form-control m-input" value="{{ old('make') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Model:</label>
                                        <input type="text" name="model" class="form-control m-input" value="{{ old('model') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Registration: </label>
                                        <input type="text" name="registration" class="form-control m-input" value="{{ old('registration') }}" required>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <div class="col-lg-4">
                                        <label class="">Year:</label>
                                        <input type="text" name="year" class="form-control m-input" value="{{ old('year') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Color:</label>
                                        <input type="text" name="color" class="form-control m-input" value="{{ old('color') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Price:</label>
                                        <input type="text" name="price" class="form-control m-input" value="{{ old('price') }}" required>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">

                                    <div class="col-lg-4">
                                        <label class="">Fuel Type:</label>
                                        <input type="text" name="fuel_type" class="form-control m-input" value="{{ old('fuel_type') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Mileage:</label> <small>Use zero if unconfirmed</small>
                                        <input type="text" name="mileage" class="form-control m-input" value="{{ old('mileage') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Transmission:</label>
                                        <input type="text" name="transmission" class="form-control m-input" value="{{ old('transmission') }}" required>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">

                                    <div class="col-lg-4">
                                        <label class="">Engine Capacity:</label>
                                        <input type="text" name="engine_capacity" class="form-control m-input" value="{{ old('engine_capacity') }}" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="">Location:</label>
                                        <input type="text" name="location" class="form-control m-input" value="{{ old('location') }}" required>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">

                                    <div class="col-lg-6">
                                        <label>Display Image <small>(main image of the vehicle)</small> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="display_image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Vehicle Images <small>(hold control to select multiple images)</small> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="images[]" multiple>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <h5 class="pl-4">Car Features</h5>
                                </div>

                                <div class="form-group m-form__group row">

                                    <div class="col-lg-6">
                                        <label>Interior <small class="font-weight-bold">(add features separated by commas e.g leather-seats, airbags)</small> </label>
                                        <textarea class="form-control" name="interior_features" id=""  rows="10"></textarea>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Exterior <small class="font-weight-bold">(add features separated by commas e.g rear spoiler, fog lights)</small> </label>
                                        <textarea class="form-control" name="exterior_features" id=""  rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="form-group m-form__group row">

                                    <div class="col-lg-6">
                                        <label>Safety & Technology <small class="font-weight-bold">(add features separated by commas e.g leather-seats, airbags)</small> </label>
                                        <textarea class="form-control" name="safety_features" id=""  rows="10"></textarea>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Performance <small class="font-weight-bold">(add features separated by commas e.g leather-seats, airbags)</small> </label>
                                        <textarea class="form-control" name="performance_features" id=""  rows="10"></textarea>
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
