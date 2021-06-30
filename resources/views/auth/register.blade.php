@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            @if (session('error_message'))
                <div class="alert alert-danger font-weight-bold">{{ session('error_message') }}</div>
            @elseif (session('warning_message'))
                <div class="alert alert-warning font-weight-bold">{{ session('warning_message') }}</div>
            @elseif (session('info_message'))
                <div class="alert alert-info font-weight-bold">{{ session('info_message') }}</div>
            @elseif (session('success_message'))
                <div class="alert alert-success font-weight-bold">{{ session('success_message') }}</div>
            @endif


            <div class="card rounded-0 shadow-sm border-0">
                <div class="card-header text-uppercase font-weight-bold pt-4 pb-4 text-center" style="background-color: #ffce00; font-size: 17px;">{{ __('KOMMUTE CAR RESERVATION FORM') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('applicant-register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-muted">Personal Information:</h5>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="name" class="col-form-label text-md-right font-weight-bold">{{ __('Firstname') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="middlename" class="col-form-label text-md-right font-weight-bold">{{ __('Middlename') }}</label>
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="surname" class="col-form-label text-md-right font-weight-bold">{{ __('Surname') }}</label>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" surname="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="national_id" class=" col-form-label text-md-right font-weight-bold">{{ __('National ID') }} <small>(upload both Front and Back)</small></label>
                                <div class="custom-file">
                                    <input type="file" id="national_id" name="national_id" class="custom-file-input form-control @error('national_id') is-invalid @enderror" required multiple>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="email" class="col-form-label text-md-right font-weight-bold">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="dob" class="col-form-label text-md-right font-weight-bold">{{ __('Date of Birth ') }} <small>(use format dd/mm/yyyy)</small></label>
                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="phone" class="col-form-label text-md-right font-weight-bold">{{ __('Phone') }}</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="id_number" class="col-form-label text-md-right font-weight-bold">{{ __('ID Number') }}</label>
                                <input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" required autocomplete="id_number">

                                @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="kra_pin" class="col-form-label text-md-right font-weight-bold">{{ __('KRA PIN') }}</label>
                                <input id="kra_pin" type="text" class="form-control @error('kra_pin') is-invalid @enderror" name="kra_pin" value="{{ old('kra_pin') }}" required autocomplete="kra_pin">

                                @error('kra_pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-muted">Residential:</h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="county" class="col-form-label text-md-right font-weight-bold">{{ __('County') }}</label>
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="county" placeholder="e.g Nairobi">

                                @error('county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="locality" class="col-form-label text-md-right font-weight-bold">{{ __('Locality') }}</label>
                                <input id="locality" type="text" class="form-control @error('locality') is-invalid @enderror" name="locality" value="{{ old('locality') }}" required autocomplete="locality" placeholder="e.g Westlands">

                                @error('locality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="street" class="col-form-label text-md-right font-weight-bold">{{ __('Street-Rd') }}</label>
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" placeholder="e.g Ring Road">

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="apartment" class="col-form-label text-md-right font-weight-bold">{{ __('Apartment') }}</label>
                                <input id="apartment" type="text" class="form-control @error('apartment') is-invalid @enderror" name="apartment" value="{{ old('apartment') }}" required autocomplete="apartment" placeholder="e.g Crescent Apartments">

                                @error('apartment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-muted">Occupation: (employed applicants)</h5>
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="employer" class=" col-form-label text-md-right font-weight-bold">{{ __('Employer') }}</label>
                                <input id="employer" type="text" class="form-control @error('employer') is-invalid @enderror" name="employer" value="{{ old('employer') }}" autocomplete="employer">
                                @error('employer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="employment_type" class=" col-form-label text-md-right font-weight-bold">{{ __('Employment Type') }}</label>
                                <select name="employment_type" id="employment_type" class="form-control">
                                    <option hidden>Employment type</option>
                                    <option value="private">Private</option>
                                    <option value="government">Government</option>
                                </select>
                                @error('employment_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="net_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Net Income') }}</label>
                                <input id="net_income" type="text" class="form-control @error('net_income') is-invalid @enderror" name="net_income" value="{{ old('net_income') }}" autocomplete="net_income">
                                @error('net_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="expenses" class=" col-form-label text-md-right font-weight-bold">{{ __('Expenses') }}</label>
                                <input id="expenses" type="text" class="form-control @error('expenses') is-invalid @enderror" name="expenses" value="{{ old('expenses') }}" autocomplete="expenses">
                                @error('expenses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="bank_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Bank Statement') }} <small>(attach 6 months statement)</small></label>
                                <div class="custom-file">
                                    <input type="file" id="bank_statements" name="bank_statements" class="custom-file-input form-control @error('bank_statements') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('bank_statements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="mpesa_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Mpesa Statement') }} <small>(attach 6 months stetement)</small></label>
                                <div class="custom-file">
                                    <input type="file" id="mpesa_statements" name="mpesa_statements" class="custom-file-input form-control @error('mpesa_statements') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('mpesa_statements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-muted">Occupation: (self employed applicants)</h5>
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="business_name" class=" col-form-label text-md-right font-weight-bold">{{ __('Business Name') }}</label>
                                <input id="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') }}" autocomplete="business_name">
                                @error('business_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="gross_business_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Gross Business Income') }}</label>
                                <input id="gross_business_income" type="text" class="form-control @error('gross_business_income') is-invalid @enderror" name="gross_business_income" value="{{ old('gross_business_income') }}" autocomplete="gross_business_income">
                                @error('gross_business_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="net_income" class=" col-form-label text-md-right font-weight-bold">{{ __('Net Income') }}</label>
                                <input id="net_income" type="text" class="form-control @error('net_income') is-invalid @enderror" name="net_income" value="{{ old('net_income') }}" autocomplete="net_income">
                                @error('net_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="cr12_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('CR12 Certificate') }} </label>
                                <div class="custom-file">
                                    <input type="file" id="cr12_certificate" name="cr12_certificate" class="custom-file-input form-control @error('cr12_certificate') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('cr12_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="kra_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('KRA Certificate') }} </label>
                                <div class="custom-file">
                                    <input type="file" id="kra_certificate" name="kra_certificate" class="custom-file-input form-control @error('kra_certificate') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('kra_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="incorporation_certificate" class=" col-form-label text-md-right font-weight-bold">{{ __('Incorporation Certificate') }} </label>
                                <div class="custom-file">
                                    <input type="file" id="incorporation_certificate" name="incorporation_certificate" class="custom-file-input form-control @error('incorporation_certificate') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('incorporation_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-4">
                                <label for="mpesa_statements" class=" col-form-label text-md-right font-weight-bold">{{ __('Mpesa Statement') }} <small>(attach 6 months stetement)</small></label>
                                <div class="custom-file">
                                    <input type="file" id="mpesa_statements" name="mpesa_statements" class="custom-file-input form-control @error('mpesa_statements') is-invalid @enderror">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('mpesa_statements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mt-5 mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn col-md-4 font-weight-bold pt-2 pb-2 pr-5 pl-5" style="background-color: #ffce00;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-8">
                                Already have an account?
                                <a class="text-muted" href="{{ url('login') }}">
                                    Login
                                </a>
                                or
                                <a class="text-muted" href="{{ url('/') }}">
                                    Go back to website
                                </a>

                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-12">

                                <p><strong>DISCLAIMER:</strong> The information shared above is strictly for financing purposes and is entrusted to kommute alone and wont be
                                shared with any other part. Read more on our <a href="">Privacy Policy</a>, <a href="">Terms and conditions</a> or fill our <a href="">Don't sell my information form.</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
