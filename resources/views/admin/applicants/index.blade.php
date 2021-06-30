@extends('layouts.admin')

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Applications
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item"></li>
                        </ul>
                    </div>
			    </div>
                <div class="m-portlet__body">
                    <table class="table table-bordered table-striped " id="table">
                        <thead class>
                            <tr>
                                <th>Vehicle</th>
                                <th>Price</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>National ID</th>
                                <th>Phone</th>
                                <th>Reserved On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applicants as $application)
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
                                                        <span class="m-card-user__name">{{$application->name}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>{{ $application->email }}</td>

                                    <td>{{ $application->email }}</td>

                                    <td>{{ Carbon\Carbon::parse($application->created_at)->format('d-m-Y ') }}</td>

                                    <td>
                                        <a href="{{ url('edit-application/'.$application->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-edit"></i>
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

































