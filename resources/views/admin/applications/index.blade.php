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
                                <th>Names</th>
                                <th>ID Number</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Application Status</th>
                                <th>Loan Status</th>
                                <th>Reserved On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $application)
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
                                                        <span class="m-card-user__name">{{$application->name}} {{$application->middlename}} {{$application->surname}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>{{ $application->id_number }}</td>

                                    <td>{{ $application->phone }}</td>

                                    <td>{{ $application->email }}</td>

                                    @if($application->application_status == 0)
                                            <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--warning m-badge--wide">{{ "Pending" }}</span></span></td>
                                    @elseif($application->application_status == 1)
                                        <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--success m-badge--wide">{{ "Approved" }}</span></span></td>
                                    @elseif($application->application_status == 2)
                                        <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--danger m-badge--wide">{{ "Rejected" }}</span></span></td>
                                    @else
                                        <td></td>
                                    @endif

                                    @if($application->loan_status == 0)
                                            <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--secondary m-badge--wide">{{ "Active" }}</span></span></td>
                                    @elseif($application->loan_status == 1)
                                        <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--success m-badge--wide">{{ "Complete" }}</span></span></td>
                                    @elseif($application->loan_status == 2)
                                        <td data-field="Status" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--success m-badge--wide"></span></span></td>
                                    @else
                                        <td></td>
                                    @endif

                                    <td>{{ Carbon\Carbon::parse($application->created_at)->format('d-m-Y ') }}</td>

                                    <td>
                                        <a href="{{ url('show-application/'.$application->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('edit-application/'.$application->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('delete-application/'.$application->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
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

































