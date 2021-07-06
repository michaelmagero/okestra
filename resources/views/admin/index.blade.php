@extends('layouts.admin')

@section('header')
    Admin Dashboard
@endsection

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
	    <!-- BEGIN: Subheader -->
            <div class="m-subheader">
                <div class="d-flex align-items-center ">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Dashboard</h3>
                    </div>
                </div>
            </div>
	    <!-- END: Subheader -->

	    <div class="m-content">
            <!--begin:: Widgets/Stats-->
            @if(Auth::user()->role == 0)
                <div class="m-portlet ">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!--begin::Total Profit-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Reservations
                                        </h4>
                                        <br>
                                        <span class="m-widget24__stats m--font-brand">
                                            {{ $applications->count() }}
                                        </span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="m--space-40"></div>
                                    </div>
                                </div>
                                <!--end::Total Profit-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!--begin::New Feedbacks-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Vehicles
                                        </h4>
                                        <br>
                                        <span class="m-widget24__stats m--font-info">
                                            {{ $vehicles->count() }}
                                        </span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="m--space-40"></div>
                                    </div>
                                </div>
                                <!--end::New Feedbacks-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <!--begin::New Orders-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Messages
                                        </h4>
                                        <br>
                                        <span class="m-widget24__stats m--font-danger">
                                            {{-- {{ $tier2 }} --}}
                                        </span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="m--space-40"></div>
                                    </div>
                                </div>
                                <!--end::New Orders-->
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!--end:: Widgets/Stats-->
	    </div>
    </div>
</div>
@endsection
