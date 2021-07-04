@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            @if (session('error_message'))
                <div class="alert alert-danger font-weight-bold">{{ session('error_message') }}</div>
            @elseif (session('warning_message'))
                <div class="alert alert-warning font-weight-bold">{{ session('warning_message') }}</div>
            @elseif (session('info_message'))
                <div class="alert alert-info font-weight-bold">{{ session('info_message') }}</div>
            @elseif (session('success_message'))
                <div class="alert alert-success font-weight-bold">{{ session('success_message') }}</div>
            @endif

            <div class="card">
                <div class="card-header text-uppercase font-weight-bold pt-3 pb-3 text-center" style="background-color: #ffce00; font-size: 17px;">{{ __('CONFIRM PAYMENT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('confirm-pay') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <label for="mobile_number" class="col-form-label text-md-right font-weight-bold">{{ __('Phone Number') }}</label>
                                <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autofocus placeholder="The number used to send MPESA payment">

                                @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <label for="transaction_id" class="col-form-label text-md-right font-weight-bold">{{ __('MPESA Transaction ID') }}</label>
                                <input id="transaction_id" type="text" class="form-control @error('transaction_id') is-invalid @enderror" name="transaction_id" value="{{ old('transaction_id') }}" required autofocus placeholder="e.g KOM12L44TE">


                                @error('transaction_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                @foreach ($applicant_details as $details)
                                    <input type="text" name="name"  value="{{ $details['name'] }}" hidden>
                                    <input type="text" name="middlename"  value="{{ $details['middlename'] }}" hidden>
                                    <input type="text" name="surname"  value="{{ $details['surname'] }}" hidden>
                                    <input type="text" name="national_id" value="{{ $details['national_id'] }}" hidden>
                                    <input type="text" name="dob"  value="{{ $details['dob'] }}" hidden>
                                    <input type="text" name="phone"  value="{{ $details['phone'] }}" hidden>
                                    <input type="text" name="email"  value="{{ $details['email'] }}" hidden>
                                    <input type="text" name="id_number"  value="{{ $details['id_number'] }}" hidden>
                                    <input type="text" name="kra_pin"  value="{{ $details['kra_pin'] }}" hidden>
                                    <input type="text" name="county"  value="{{ $details['county'] }}" hidden>
                                    <input type="text" name="locality"  value="{{ $details['locality'] }}" hidden>
                                    <input type="text" name="street"  value="{{ $details['street'] }}" hidden>
                                    <input type="text" name="apartment"  value="{{ $details['apartment'] }}" hidden>
                                    <input type="text" name="employer"  value="{{ $details['employer'] }}" hidden>
                                    <input type="text" name="net_income"  value="{{ $details['net_income'] }}" hidden>
                                    <input type="text" name="expenses"  value="{{ $details['expenses'] }}" hidden>
                                    <input type="text" name="bank_statements"  value="{{ $details['bank_statements'] }}" hidden>
                                    <input type="text" name="mpesa_statements"  value="{{ $details['mpesa_statements'] }}" hidden>
                                    <input type="text" name="business_name"  value="{{ $details['business_name'] }}" hidden>
                                    <input type="text" name="gross_business_income"  value="{{ $details['gross_business_income'] }}" hidden>
                                    <input type="text" name="cr12_certificate"  value="{{ $details['cr12_certificate'] }}" hidden>
                                    <input type="text" name="kra_certificate"  value="{{ $details['kra_certificate'] }}" hidden>
                                    <input type="text" name="incorporation_certificate"  value="{{ $details['incorporation_certificate'] }}" hidden>
                                    <input type="text" name="vehicle_id"  value="{{ $details['vehicle_id'] }}" hidden>
                                @endforeach

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-warning font-weight-bold pt-2 pb-2 pr-5 pl-5" style="background-color: #ffce00;">
                                    {{ __('Submit Application') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
