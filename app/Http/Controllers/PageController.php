<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_date', today()->toDateString())->get();
        return view('home', compact('trains'));
    }
}
