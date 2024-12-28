<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::query()->paginate(10);
       return view('conference.index', [
           'conferences' => $conferences,
       ]);
    }

    public function create(): View
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'description' => 'required',
           'venue' => 'required',
           'start_at' => 'required',
           'end_at' => 'required',
           'speaker_name' => 'required',
           'speaker_email' => 'required|email',
           'ticket_cost' => 'required|min:1|max:1000|numeric',
        ]);
        Conference::query()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'venue' => $request->venue,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'speaker_name' => $request->speaker_name,
            'speaker_email' => $request->speaker_email,
            'ticket_cost' => $request->ticket_cost,
        ]);

        // Set flash message after create
        $request->session()->flash('success', 'Conference created successfully.');
        return redirect()->route('conferences.index');
    }
}
