<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("frontend.index");
    }
    public function features() {
        return view('frontend.features');
    }

    public function innovations() {
        return view('frontend.innovations');
    }

    public function architecture() {
        return view('frontend.architecture');
    }

    public function benchmarks() {
        return view('frontend.benchmarks');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function faq() {
        return view('frontend.faq');
    }

    public function privacy(){
        return view('frontend.privacy');
    }

    public function terms(){
        return view('frontend.terms');
    }
    public function careers()
    {
        return view('frontend.careers');
    }
}
