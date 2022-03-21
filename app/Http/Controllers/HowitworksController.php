<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Howitworks;

class HowitworksController extends Controller
{
    public function howitworks() {
        return view('howitworks')
        ->with('howitworkes',Howitworks::howitwork());
}
}