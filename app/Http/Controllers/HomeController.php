<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sermon;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('homePage');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contact');
    }
    public function donate(){
        return view('donate');
    }
    public function videos(){
        return view('videos');
    }
    public function activities(){
        return view('activities');
    }
    public function sermony(){
        return view('sermony',['sermonies'=>Sermon::all()]);
    }
    public function temperence(){
        return view('sermony-temperence');
    }
    public function currentEvent(){
        return view('sermony-current-event');
    }

}
