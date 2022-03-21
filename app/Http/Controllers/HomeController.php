<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Howitworks;
use App\Models\About;

class HomeController extends Controller
{
    

    public function index() {
        return view('index')
        ->with('items',Item::item());
    }
}

