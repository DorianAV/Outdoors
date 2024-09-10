<?php

namespace App\Http\Controllers;

use App\Models\TitleSlider;

class AdminController extends Controller
{
    public function index()
    {
        $titleSliders = TitleSlider::all();
        return view('admin.home',compact('titleSliders'));
    }

}
