<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\HomeDetails;
use App\Models\HomeImages;
use App\Models\HomeSection;
use App\Models\Service;
use App\Models\TitleSlider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Outdoors Admin',
            'email' => 'admin@conroeoutdoorconstruction.com',
            'password' => bcrypt('Y93qQodN'),
        ]);

        \App\Models\About::create([
            'title' => 'Plan your success',
            'subtitle1' => 'MISSION',
            'description1' => 'Provide quality work in a timely and form committed to our clients and their families wishing to serve and be part of the beginning of a project that will create unforgettable moments.',
            'subtitle2' => 'VISION',
            'description2' => 'Continue to earn the trust of our customers, create a company committed to the family and their needs.sssss',
            'image1' => 'uploads/about1.jpg',
            'image2' => 'uploads/about2.png',
        ]);

        Contact::create([
            'span' => 'How can we help?',
            'title' => 'Quality & Passion With Contact Form',
            'description' => 'Have questions or want to chat? Fill out our contact form, and we’ll put you in touch with the right people.',
            'address' => 'CONROE TX , USA',
            'phone' => '+1(936)-514-0208',
            'email' => 'sales@conroeoutdoorconstruction.com',
        ]);

        HomeDetails::create([
            'title' => 'WORKING PROCESS',
            'subtitle1' => 'ESTIMATE',
            'description1' => 'You give us the exact details of what you want to build, we will give you an idea of how much it will cost to do it.',
            'subtitle2' => 'QUESTIONS AND CONCERNS',
            'description2' => 'Let us know your questions, concerns, we will try to be as clear possible.',
            'subtitle3' => 'MAKE A PLAN',
            'description3' => 'What day you want to start, schedule and organize our team based on your needs.',
            'subtitle4' => 'MAKE IT A REALITY',
            'description4' => 'We will work from start to finish, with the hope that in the end your smile and that of your loved ones will be the last thing we see when we leave onto the next project.',
            'image' => 'uploads/working.jpeg',
            'videoUrl' => 'https://www.youtube.com/embed/7e90gBu4pas',
        ]);

        HomeImages::create(['image' => 'uploads/project1.jpeg']);
        HomeImages::create(['image' => 'uploads/project2.jpeg']);
        HomeImages::create(['image' => 'uploads/project3.jpeg']);
        HomeImages::create(['image' => 'uploads/project4.jpeg']);
        HomeImages::create(['image' => 'uploads/project5.jpeg']);
        HomeImages::create(['image' => 'uploads/project6.jpeg']);
        HomeImages::create(['image' => 'uploads/project7.jpeg']);
        HomeImages::create(['image' => 'uploads/project8.jpeg']);
        HomeImages::create(['image' => 'uploads/image00001.jpeg']);
        HomeImages::create(['image' => 'uploads/image00002.jpeg']);
        HomeImages::create(['image' => 'uploads/image00003.jpeg']);
        HomeImages::create(['image' => 'uploads/image00004.jpeg']);
        HomeImages::create(['image' => 'uploads/image00005.jpeg']);
        HomeImages::create(['image' => 'uploads/image00006.jpeg']);
        HomeImages::create(['image' => 'uploads/image00007.jpeg']);
        HomeImages::create(['image' => 'uploads/image00008.jpeg']);
        HomeImages::create(['image' => 'uploads/image00009.jpeg']);
        HomeImages::create(['image' => 'uploads/image00010.jpeg']);
        HomeImages::create(['image' => 'uploads/image00011.jpeg']);
        HomeImages::create(['image' => 'uploads/image00012.jpeg']);
        HomeImages::create(['image' => 'uploads/image00013.jpeg']);
        HomeImages::create(['image' => 'uploads/image00014.jpeg']);
        HomeImages::create(['image' => 'uploads/image00015.jpeg']);
        HomeImages::create(['image' => 'uploads/image00016.jpeg']);
        HomeImages::create(['image' => 'uploads/image00017.jpeg']);
        HomeImages::create(['image' => 'uploads/image00018.jpeg']);
        HomeImages::create(['image' => 'uploads/image00019.jpeg']);
        HomeImages::create(['image' => 'uploads/image00020.jpeg']);
        HomeImages::create(['image' => 'uploads/image00021.jpeg']);
        HomeImages::create(['image' => 'uploads/image00022.jpeg']);
        HomeImages::create(['image' => 'uploads/image00023.jpeg']);
        HomeImages::create(['image' => 'uploads/image00024.jpeg']);
        HomeImages::create(['image' => 'uploads/image00025.jpeg']);
        HomeImages::create(['image' => 'uploads/image00026.jpeg']);
        HomeImages::create(['image' => 'uploads/image00027.jpeg']);
        HomeImages::create(['image' => 'uploads/image00028.jpeg']);
        HomeImages::create(['image' => 'uploads/image00029.jpeg']);
        HomeImages::create(['image' => 'uploads/image00030.jpeg']);
        HomeImages::create(['image' => 'uploads/image00031.jpeg']);
        HomeImages::create(['image' => 'uploads/image00032.jpeg']);
        HomeImages::create(['image' => 'uploads/image00033.jpeg']);
        HomeImages::create(['image' => 'uploads/image00034.jpeg']);
        HomeImages::create(['image' => 'uploads/image00035.jpeg']);



        HomeSection::create([
            'span' => 'QUALITY',
            'title' => 'GUARANTEE AND SATISFACTION',
            'description' => 'WE ARE PLEASED TO CREATE AND INNOVATE OUTDOOR SPACES. OUR GOAL IS TO IMPROVE THE QUALITY OF LIFE OF OUR CLIENTS BY PROVIDING THEM WITH A SPACE TO ENJOY WITH FAMILY AND FRIENDS, WHERE YOU ARE THE ARCHITECT AND DESIGNER, WE ARE THE HANDS THAT WILL MAKE IT A REALITY.',
            'image1' => 'uploads/quality1.jpeg',
            'image2' => 'uploads/quality2.jpeg',
        ]);

        Service::create([
            'title' => 'NEW CONSTRUCTION ADDITIONS',
            'description' => 'Do you need extra space? a room or simply make some changes so that the space you enjoy so much becomes perfect? Do you need a place to store your tools? Tell us what needs to be added, modified or created... together we can do it.',
            'image' => 'uploads/house_light.png',
        ]);

        Service::create([
            'title' => 'ROOFING',
            'description' => 'The roof is one of the main and most important structures of your home, take action and protect your assets, if it is time to replace the roof of your home, or make a repair... count on us.',
            'image' => 'uploads/roofing_light.png',
        ]);

        Service::create([
            'title' => 'PAINTING',
            'description' => 'You need to make some changes, a fresher color... a combination or a new design came to your mind and you are ready to carry it out, we can give that change to your house or project.',
            'image' => 'uploads/paiting_light.png',
        ]);

        Service::create([
            'title' => 'DECK',
            'description' => 'Do you need a deck next to your house, a space where you can sit and relax or eat, be with your friends and enjoy pleasant moments? Let us help you make your intentions come true.',
            'image' => 'uploads/deck_light.png',
        ]);

        Service::create([
            'title' => 'GAZEBOS',
            'description' => 'A gazebo is a freestanding, open garden structure, sometimes with a specific design, with a roof. Most gazebos are constructed of wood or metal and have built-in seating inside the sheltered area.',
            'image' => 'uploads/gazebo_light.png',
        ]);

        Service::create([
            'title' => 'PATIO COVER',
            'description' => 'Whether providing shade or protection from rain, a patio structure is an element that makes your outdoor space livable, no matter the weather. These moments can last as long as necessary.',
            'image' => 'uploads/patio_light.png',
        ]);

        Service::create([
            'title' => 'ARBORS',
            'description' => 'One of the favorites of landscaping lovers is a garden alcove with shade, sides and a roof made up of trees or climbing plants on a wooden framework.',
            'image' => 'uploads/arbors_light.png',
        ]);

        Service::create([
            'title' => 'OUTDOOR KITCHEN',
            'description' => 'For lovers of outdoor cooking, who enjoy preparing the favorites of their family and friends, without missing a moment of fun, an outdoor kitchen will allow you to pamper yourself and your loved ones.',
            'image' => 'uploads/outdoors_kitchen_light.png',
        ]);

        Service::create([
            'title' => 'WINDOW AND/OR DOOR NEW INSTALLATION',
            'description' => 'Enhance your home\'s security and style with our professional window and door installation, tailored to your needs.',
            'image' => 'uploads/window.png',
        ]);

        Service::create([
            'title' => 'BULKHEAD REPAIRS',
            'description' => 'Restore your property with our bulkhead repair services. We address leaks, cracks, and structural issues to ensure long-lasting durability and prevent future problems.',
            'image' => 'uploads/bulkhead.png',
        ]);

        Service::create([
            'title' => 'POWER WASHING',
            'description' => 'Revitalize your home’s exterior with our power washing service. Remove dirt, grime, and stains to restore the fresh and clean appearance of driveways, decks, and siding.',
            'image' => 'uploads/washing.png',
        ]);

        Service::create([
            'title' => 'GUTTER CLEANING',
            'description' => 'Protect your home from water damage with our thorough gutter cleaning service. We clear debris and blockages to keep your gutters functioning properly and prevent overflow.',
            'image' => 'uploads/gutter.png',
        ]);

        Service::create([
            'title' => 'NEW FENCE AND REPAIRS',
            'description' => 'Enhance your property with our new fence installation and repair services. We offer durable and stylish fencing solutions to boost both security and curb appeal.',
            'image' => 'uploads/fence.png',
        ]);


        TitleSlider::create([
            'title' => 'Experience Matters',
            'subtitle' => 'SERVING CONROE, SPRING, THE WOODLANDS, AND SURROUNDINGS AREAS.',
            'image' => 'uploads/slide1.jpeg',
        ]);

        TitleSlider::create([
            'title' => 'A Better Way To Build Your Dreams',
            'subtitle' => null, // No hay subtítulo en este caso
            'image' => 'uploads/slide2.jpeg',
        ]);

        TitleSlider::create([
            'title' => 'Build Innovative & Industrial Solutions',
            'subtitle' => null, // No hay subtítulo en este caso
            'image' => 'uploads/lk6fVPcUWDU6IYnHg70PGbZdBCDkh4PPpBFuMYI6.jpg',
        ]);


    }
}
