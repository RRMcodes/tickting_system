<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DataTables;
use Session;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::all();
        return view('events.index')->with(compact('events'));
    }

    public function getEventsJson(Request $request) {

        $event = event::query();

        return DataTables::of($event)->toJson();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'details' => 'required',
            'quantity' => 'required'
        ]);
        $event = $request->except(['_token']);
//        dd($event);
        Event::create($event);
        Session::flash('message',config("message.messages.created"));
        return redirect()->route('events.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = event::findOrFail($id);
        return view('events.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $event = event::find($request->id);
        $data = $request->except(['_token']);
        $event->update($data);
        Session::flash('message',config("message.messages.updated"));
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::findOrFail($id);
        $event->delete();
        return response()->json([
            'success'=> true,
            'message'=> config("message.messages.deleted"),
        ]);
    }
}
