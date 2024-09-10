<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class OutdoorsController extends Controller
{
    public function index()
    {
        $services=Service::all();
        return view('outdoors.index',compact('services'));
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
