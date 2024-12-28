<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
       //
    }

    public function create()
    {
        return view('conference.create');
    }
}
