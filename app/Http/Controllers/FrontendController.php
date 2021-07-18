<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{

    public function home()
    {
        return view('frontend.home');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function support()
    {
        return view('frontend.support');
    }
}
