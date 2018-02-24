<?php

namespace App\Http\Controllers;

use App\Event;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();

        return view('home', compact('events'));
    }
}
