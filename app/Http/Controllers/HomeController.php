<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Chef;
use App\Models\ChefSocialmedia;
use App\Models\Contact;
use App\Models\DishSpecial;
use App\Models\Event;
use App\Models\EventFeature;
use App\Models\ImagesResturant;
use App\Models\information;
use App\Models\MenuCategory;
use App\Models\MenuItem;
// use App\Models\Notification;
use App\Models\OurFeature;
use App\Models\Table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index()
    {
        $tables = Table::get();
        $about = About::get();
        $aboutFeature = AboutFeature::get();
        $our_features = OurFeature::get();
        $menuCategories = MenuCategory::get();
        $menuItems = MenuItem::with('category')->get();
        $specials = DishSpecial::get();
        $events = Event::with('event_feature')->get();
        $event_features= EventFeature::get();
        $images = ImagesResturant::get();
        $chefs = Chef::with('chef_social')->get();
        $chef_socials = ChefSocialmedia::get();
        $informations = information::get();
       

        return view('index' , compact(['about','aboutFeature','menuItems','menuCategories' , 'our_features' , 'specials' , 'events' , 'event_features', 'images' , 'chefs' , 'chef_socials' , 'informations' , 'tables' ]));
    }
    
}
