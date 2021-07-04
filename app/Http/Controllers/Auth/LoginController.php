<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin-dash';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        //Error messages
        $messages = [
            'email.required' => "Email is required",
            'email.email' => "Email is not valid",
            'email.exists' => "Email doesn't exists",
            'password.required' => "Password is required",
            'password.min' => "Password must be at least 6 characters"
        ];

        // validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ], $messages);

        if (empty($request->email) && empty($request->password)) {
            $request->session()->flash('error_message', 'Empty Fields! Provide username and password to Login');
            return back();
        } elseif ($validator->fails()) {
            $request->session()->flash('error_message', 'Make sure Email is valid and has correct format and Password has Minimum of 6 charcters');
            return back();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                $request->session()->put('admin_log', [$request->email, $request->password]);
                $request->session()->flash('success_message', 'Login Successful');
                return redirect('/admin-dash');
            } elseif (!Auth::attempt()) {
                $request->session()->flash('error_message', 'Wrong credentials! check username and password and try again');
                return redirect('/login');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flash('admin_log');
        return redirect('/');
    }
}
