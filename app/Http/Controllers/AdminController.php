<?php

namespace App\Http\Controllers;

use App\Models\HomeImages;
use App\Models\HomeSection;
use App\Models\TitleSlider;

class AdminController extends Controller
{
    public function index()
    {
        $titleSliders = TitleSlider::all();
        $homeSection = HomeSection::first();
        $images = HomeImages::all();
        return view('admin.home',compact('titleSliders','homeSection','images'));
    }

}
