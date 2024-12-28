<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttendeeController extends Controller
{
    public function index()
    {
        $attendees = Attendee::query()->paginate(10);
        return view('attendee.index', [
            'attendees' => $attendees,
        ]);
    }

    public function create()
    {
        $conferences = Conference::all();
        return view('attendee.create', [
            'conferences' => $conferences,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('attendees')->where(function ($query) use ($request) {
                    return $query->where('eamil', $request->email);
                })
            ],
            'phone' => [
                'required',
                'min:10',
                'max:25',
                Rule::unique('attendees')->where(function ($query) use ($request) {
                    return $query->where('conference_id', $request->conference);
                })
            ],
            'conference' => 'required',
            'is_paid' => 'nullable|boolean'
        ]);

        Attendee::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'conference_id' => $request->conference,
            'is_paid' => $request->is_paid ?? false,
        ]);
        $request->session()->flash('success', 'Attendee created successfully.');
        return redirect()->route('attendee.index');

    }

    public function edit(Attendee $attendee){
        $conferences = Conference::all();
        return view('attendee.edit', [
            'attendee' => $attendee,
            'conferences' => $conferences,
        ]);
    }

    public function update(Request $request, Attendee $attendee){
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('attendees')->ignore($attendee->id)->where(function ($query) use ($request) {
                    return $query->where('eamil', $request->email);
                })
            ],
            'phone' => [
                'required',
                'min:10',
                'max:25',
                Rule::unique('attendees')->ignore($attendee->id)->where(function ($query) use ($request) {
                    return $query->where('conference_id', $request->conference);
                })
            ],
            'conference' => 'required',
            'is_paid' => 'nullable|boolean'
        ]);
        $attendee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'conference_id' => $request->conference,
            'is_paid' => $request->is_paid ?? false,
        ]);
        $request->session()->flash('success', 'Attendee updated successfully.');
        return redirect()->route('attendee.index');
    }

    public function destroy(Request $request, Attendee $attendee)
    {
        $attendee->delete();
        $request->session()->flash('success', 'Attendee deleted successfully.');
        return redirect()->route('attendee.index');
    }
}
