<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function about(){
        return view('home.about');

    }

    public function service(){
        return view('home.service');
    }

    public function career(){
        return view('home.career');
    }

    public function contact(){
        return view('home.contact');
    }

    public function counseling(){
        return view('home.service_section.counsell');
    }

    public function staff(){
        return view('home.service_section.staff');
    }
    public function recruitment(){
        return view('home.service_section.recruitment');
    }
    public function employee(){
        return view('home.service_section.employee');
    }
    public function candidate(){
        return view('home.service_section.cadidate');
    }
    public function management(){
        return view('home.service_section.management');
    }
}
