<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Howitworks;
use App\Models\About;

class HomeController extends Controller
{
    public function about(){
        return view('about')
        ->with('abouts',About::about())
        ;
    }
    
    public function howitworks() {
        return view('howitworks')
        ->with('howitworkes',Howitworks::howitworks());
    }

    public function cooming() {
        return view('cooming');
    }  

    public function pricing() {
        return view('pricing');
    }

    public function product() {
        return view('product');
    }

    public function profile() {
        return view('profile');
    }

    public function index() {
        return view('index')
        ->with('items',Item::item());
    }
}

