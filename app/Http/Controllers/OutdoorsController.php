<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\HomeDetails;
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
        $services = Service::all();
        $homeSection = HomeSection::first();
        $images = HomeImages::all();
        $homeDetails = HomeDetails::first();
        $contact = Contact::first();
        return view('outdoors.index', compact('services', 'titleSliders', 'homeSection', 'images', 'homeDetails', 'contact'));
    }

    public function about()
    {
        $about = About::first();
        $contact = Contact::first();

        return view('outdoors.about', compact('about', 'contact'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('outdoors.contact', compact('contact'));
    }

    public function services()
    {
        $contact = Contact::first();

        $services = Service::all();
        return view('outdoors.services', compact('services', 'contact'));
    }
}
