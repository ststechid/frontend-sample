<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleMapController extends Controller
{
    //
    public function withMarker() {
        return view('others/google-with-marker');
    }
}
