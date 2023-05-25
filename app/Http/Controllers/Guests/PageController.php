<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //dd(House::all());
        $houses = House::orderByDesc('id')->get();
        return view('home', compact('houses'));
    }
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
}
