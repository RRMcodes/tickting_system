<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\TicketType;
use App\Http\Controllers\TicketTypeController;
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
        $eventTypes = eventType::all();
        return view('events.create')->with(compact('eventTypes'));
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

        $event = Event::create([
            'type'              =>$request->type,
            'start_date'        =>$request->start_date,
            'end_date'          =>$request->end_date,
            'details'           =>$request->details,
            'quantity'          =>$request->quantity,
        ]);

        $ticket_type_collection = [];
        foreach ($request->ticket_type_name as $key=>$value){
            $obj = [
                'name'              =>$request->ticket_type_name[$key],
                'eventID'           =>$event->id,
                'quantity'          =>$request->ticket_type_quantity[$key],
                'price'             =>$request->ticket_type_price[$key],
            ];
            array_push($ticket_type_collection,$obj);
        }
        TicketType::insert($ticket_type_collection);
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
        $ticketTypes = TicketType::where('eventID',$id)->get();
        return view('events.edit')->with(compact('event','ticketTypes'));
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
        $data = $request->except(['_token','ticket_type_name','ticket_type_quantity','ticket_type_price']);

        $ticket_type_collection = [];
        $new_ticket_type_collection = [];

        if (isset($request->ticket_type_name)) {


            foreach ($request->ticket_type_name as $key => $value) {
                if (isset($request->ticket_type_id[$key])) {

                    $obj = [
                        'id' => $request->ticket_type_id[$key],
                        'name' => $request->ticket_type_name[$key],
                        'eventID' => $request->id,
                        'quantity' => $request->ticket_type_quantity[$key],
                        'price' => $request->ticket_type_price[$key],
                    ];
                    array_push($ticket_type_collection, $obj);

                }
                else{

                    $newObj = [
                        'name' => $request->ticket_type_name[$key],
                        'eventID' => $request->id,
                        'quantity' => $request->ticket_type_quantity[$key],
                        'price' => $request->ticket_type_price[$key],
                    ];
                    array_push($new_ticket_type_collection, $newObj);

                }
            }


            foreach ($ticket_type_collection as $ticket_type) {

                    TicketType::where('id', $ticket_type['id'])
                        ->update(['name' => $ticket_type['name'],
                            'quantity' => $ticket_type['quantity'],
                            'price' => $ticket_type['price']
                        ]);
            }

            foreach ($new_ticket_type_collection as $new_ticket_type) {

//                (['name' => $new_ticket_type['name'],
//                    'quantity' => $new_ticket_type['quantity'],
//                    'price' => $new_ticket_type['price']
//                ]);

                TicketType::insert($new_ticket_type_collection);
            }

        }
        else{
            $ticket_types = TicketType::where('eventID', $request->id)->get();
            foreach ($ticket_types as $ticket_type) {
            $ticket_type->delete();
            }
        }


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
