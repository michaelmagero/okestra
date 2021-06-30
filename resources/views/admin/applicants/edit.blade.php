
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
                                            Edit User
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-user/{{ $user->id }}" autocomplete="off">
                                        {{ csrf_field() }}
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        User Information
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Names</label>
                                                <div class="col-lg-7">
                                                    <input class="form-control m-input" name="name"  type="text" value="{{ $user->name }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                                <div class="col-lg-7">
                                                    <input class="form-control m-input"  name="email"  type="email" value="{{ $user->email }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Role:</label>
                                                <div class="col-lg-7">
                                                    <select class="form-control m-input" name="role" value="{{ old('role') }}" required>
                                                        <option hidden>
                                                        Select Role
                                                        </option>
                                                        <option value="{{ $user->role }}" selected>
                                                            @if ($user->role == 0)
                                                                {{ 'Admin' }}
                                                            @elseif ($user->role == 1)
                                                                {{ 'Analyst' }}
                                                            @endif
                                                        </option>
                                                        <option value="0">
                                                            Admin
                                                        </option>
                                                        <option value="1">
                                                            Analyst
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        Change Password
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Password</label>

                                                <div class="col-md-7">
                                                    <input id="password" type="password" value="{{ $user->password }}" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }} m-form__group row">
                                                <label for="password-confirm" class="col-2 col-form-label">Confirm Password</label>
                                                <div class="col-md-7">
                                                    <input id="password-confirm" type="password" value="{{ $user->password }}" class="form-control" name="confirm_password" required>

                                                    @if ($errors->has('confirm_password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('confirm_password') }}</strong>
                                                        </span>
                                                    @endif
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

































