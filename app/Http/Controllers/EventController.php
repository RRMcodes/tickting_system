<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Http\Controllers\TicketTypeController;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Session;
use Image;
use Str;
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


        $ticket_type_image_collection = [];


        // image store
        if ( $request->hasFile('ticket_type_image')) {

            $newFiles = $request->file('ticket_type_image');

            foreach ($newFiles as $key=>$newFile) {
                $imageName  = Str::random().$key.'.'.$newFile->getClientOriginalExtension();
                $image = $newFile->getClientOriginalName();
                $newFile->move('storage/images/',$imageName);
                array_push($ticket_type_image_collection, $imageName);
            }

        }


        $event = Event::create([
            'name' => $request->name,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'details' => $request->details,
            'quantity' => $request->quantity,
        ]);



//        create ticket type
        $ticket_type_collection = [];

        if (isset($request->ticket_type_name)) {
            foreach ($request->ticket_type_name as $key => $value) {
                $obj = [
                    'name'      => $request->ticket_type_name[$key],
                    'event_id'  => $event->id,
                    'quantity'  => $request->ticket_type_quantity[$key],
                    'price'     => $request->ticket_type_price[$key],
                    'image'     => $ticket_type_image_collection[$key],
                ];


//                if($request->ticket_type_image[$key]){
//                    $file =$request->ticket_type_image[$key];
//                    $file_name = time().'_'.$file->getClientOriginalName();
//                    $img = Image::make($file);
//                    $img->save(config('images.event.ticket'.$file_name));
//                    $obj['image'] = $file_name;

//                }
                array_push($ticket_type_collection, $obj);
            }
        }



        TicketType::insert($ticket_type_collection);

        Session::flash('message',config("message.messages.created"));
        return redirect()->route('events.index');
    }


    public function storeTickets ($id)
    {
        $ticket_types = TicketType::where('event_id', $id)->get();
        $event = Event::findOrFail($id);
        $ticket_collection = [];



            foreach ($ticket_types as $ticketType) {

                 for ($x = 0; $x < $ticketType->quantity; $x++) {

                    $num = strval($event->id);
                    $num .= strval($ticketType->id);
                    $num .= Str::length($ticketType->name);

                    $obj = [

                        'ticket_type_id' => $ticketType->id,
                        'event_id' => $event->id,
                        'ticket_number' => Str::random(),
                        'ticket_image' => $ticketType->image,
                        'price' => $ticketType->price,
                        'start_date' => $event->start_date,
                        'end_date' => $event->end_date,
                    ];

                    array_push($ticket_collection, $obj);
                }

            }

            $chunks = array_chunk($ticket_collection,1000);


            foreach ($chunks as $chunk) {
            Ticket::insert($chunk);
            }

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
        $ticketTypes = TicketType::where('event_id',$id)->get();
        $event = Event::findOrFail($id);
        $eventTypes = EventType::findOrFail($event->type);
        return view('events.show')->with(compact('ticketTypes', 'event', 'eventTypes'));
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
        $ticketTypes = TicketType::where('event_id',$id)->get();
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
        $data = $request->except(['_token','ticket_type_name','ticket_type_quantity','ticket_type_price','ticket_type_image']);

        $ticket_type_collection = [];
        $new_ticket_type_collection = [];
        $ticket_type_image_collection = [];


        if (isset($request->ticket_type_name)) {

            if ( $request->hasFile('ticket_type_image')) {

                $newFiles = $request->file('ticket_type_image');

                foreach ($newFiles as $key=>$newFile) {
                    if (Storage::exists($newFile)) {

                    }
                    else {
                        $imageName  = Str::random().$key.'.'.$newFile->getClientOriginalExtension();
                        $image = $newFile->getClientOriginalName();
                        $newFile->move('storage/images/',$imageName);
                        $ticket_type_image_collection[$key] = $imageName;

                    }
                }

            }

            foreach ($request->ticket_type_name as $key => $value) {
                if (isset($request->ticket_type_id[$key])) {

                    $obj = [
                        'id' => $request->ticket_type_id[$key],
                        'name' => $request->ticket_type_name[$key],
                        'event_id' => $request->id,
                        'quantity' => $request->ticket_type_quantity[$key],
                        'price' => $request->ticket_type_price[$key],
                    ];
                    (isset($ticket_type_image_collection[$key]))? $obj['image']= $ticket_type_image_collection[$key]:false;
                    array_push($ticket_type_collection, $obj);

                } else {

                    $newObj = [
                        'name' => $request->ticket_type_name[$key],
                        'event_id' => $request->id,
                        'quantity' => $request->ticket_type_quantity[$key],
                        'price' => $request->ticket_type_price[$key],
                    ];
                    (isset($ticket_type_image_collection[$key]))? $obj['image']= $ticket_type_image_collection[$key]:false;
                    array_push($new_ticket_type_collection, $newObj);

                }
            }



            foreach ($ticket_type_collection as $ticket_type) {

                TicketType::where('id', $ticket_type['id'])
                    ->update($ticket_type);
            }

//            foreach ($new_ticket_type_collection as $new_ticket_type) {
//
//                (['name' => $new_ticket_type['name'],
//                    'quantity' => $new_ticket_type['quantity'],
//                    'price' => $new_ticket_type['price']
//                ]);
//            }
            TicketType::insert($new_ticket_type_collection);


        }
        else{
            $ticket_types = TicketType::where('event_id', $request->id)->get();
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
        $ticket_types = TicketType::where('event_id', $id)->get();
        $ticket_types->delete();

        return response()->json([
            'success'=> true,
            'message'=> config("message.messages.deleted"),
        ]);
    }


    public function filterTickets(Request $request) {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $events = Event::where('deleted_at',null)->get();
            return view('ticket.form')->with(compact('events'));
        }else{
            $query = Ticket::where('ticket_type_id',$request->ticketType)
                ->where('event_id',$request->event)->get();
        }
    }

    public function filter(Request $request){
        $event = Event::find($request->route('id'));
        return response()->json([
            'success'   =>true,
            'ticketType'=>$event->ticketType()->get()
        ]);
    }

    public function getTicketsJson(Request $request) {
        $ticket = ticket::where('event_id',$request->event)
        ->where('ticket_type_id',$request->ticketType);
        return DataTables::of($ticket)->toJson();
    }

}
