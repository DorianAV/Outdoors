<?php

namespace App\Http\Controllers;

use App\Models\HomeImages;
use App\Models\HomeSection;
use App\Models\Service;
use App\Models\TitleSlider;
use Illuminate\Http\Request;

class OutdoorsController extends Controller
{
    public function index()
    {
        $titleSliders = TitleSlider::all();
        $services=Service::all();
        $homeSection = HomeSection::first();
        $images = HomeImages::all();
        return view('outdoors.index',compact('services','titleSliders','homeSection','images'));
    }
    public function about()
    {
        return view('outdoors.about');
    }
    public function contact()
    {
        return view('outdoors.contact');
    }
    public function services()
    {
        $services=Service::all();
        return view('outdoors.services',compact('services'));
    }
}
