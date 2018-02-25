<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::where('scheduled_at', '>', Carbon::now())->get();

        return view('home', compact('events'));
    }
}
