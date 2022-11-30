<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;
use DataTables;
use Session;


class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketTypes = ticketType::all();
        return view('ticketTypes.index')->with(compact('ticketTypes'));
    }


    public function getTicketTypesJson ()
    {
        $ticketType = ticketType::query();

        return DataTables::of($ticketType)->toJson();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticketTypes.create');
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
            'name' => 'required',

        ]);
        $ticketType = $request->except(['_token']);
//        dd($ticket);
        ticketType::create($ticketType);
        Session::flash('message',config("message.messages.created"));
        return redirect()->route('ticketTypes.index');
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
        $ticketType = ticketType::findOrFail($id);
        return view('ticketTypes.edit')->with(compact('ticketType'));
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
        $ticketType = ticketType::findOrFail($request->id);
        $data = $request->except(['_token']);
        $ticketType->update($data);
        Session::flash('message',config("message.messages.updated"));
        return redirect()->route('ticketTypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticketType = ticketType::findOrFail($id);
        $ticketType->delete();
        return response()->json([
            'success'=> true,
            'message'=> config("message.messages.deleted"),
        ]);
    }
}
