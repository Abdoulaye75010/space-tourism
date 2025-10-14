<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index()
    {
        return view('tasks.crew.douglas-hurley');
    }

    public function douglas()
    {
        return view('tasks.crew.douglas-hurley');
    }

    public function mark()
    {
        return view('tasks.crew.mark-shuttleworth');
    }

    public function victor()
    {
        return view('tasks.crew.victor-glover');
    }

    public function anousheh()
    {
        return view('tasks.crew.anousheh-ansari');
    }
}
