<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index()
    {
        return view('attendee.index');
    }

    public function create()
    {
        return view('attendee.create');
    }

    public function store(Request $request)
    {

    }
}
