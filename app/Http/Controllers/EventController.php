<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Area;
use App\Models\Event;
use App\Models\EventPlace;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create', [
            'areas' => Area::with(['eventPlaces' => function ($query) {
                $query->orderBy('name');
            }])->orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $starts_at = $request->input('starts_at');
        $ends_at = $request->input('ends_at');
        $zip_code_place = $request->input('event_place');
        $id_and_place = EventPlace::where('name', $zip_code_place)->first();

        dd($request->all());
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'starts_at' => $request->starts_at,
            'ends_at' => $request->ends_at,
            'event_place_id' => $id_and_place->id,
        ]);

        return redirect()->route('events.show', ['event' => $event]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
