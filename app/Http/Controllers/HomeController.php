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
        $sermonies = Sermon::all();
        return view('sermony',['sermonies'=>$sermonies->where('type','Justfication by faith')]);
    }
    public function temperence(){
        $sermonies = Sermon::all();
        return view('sermony-temperence',['sermonies'=>$sermonies->where('type','Temperance')]);
    }
    public function currentEvent(){
        $sermonies = Sermon::all();
        return view('sermony-current-event',['sermonies'=>$sermonies->where('type','Current event')]);
    }

}
