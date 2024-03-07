<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('approved', 1)->paginate(6);
        $categories = Category::all();
        return view('Home.index', compact('events', 'categories'));
    }
}
