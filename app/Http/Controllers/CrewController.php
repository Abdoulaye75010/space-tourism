<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrewController extends Controller
{
    // Page principale du crew
    public function index()
    {
        return view('crew.index');
    }

    // Membres individuels
    public function douglasHurley()
    {
        return view('crew.douglas-hurley');
    }

    public function markShuttleworth()
    {
        return view('crew.mark-shuttleworth');
    }

    public function victorGlover()
    {
        return view('crew.victor-glover');
    }

    public function anoushehAnsari()
    {
        return view('crew.anousheh-ansari');
    }
}