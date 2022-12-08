@extends('layouts.app')
@section('content')

    <div class="pcoded-content">

        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>{{$event->name}}</h2>
                                    </div>

                                    <div class="card-block">
                                        <h4>Event Type</h4>
                                        <p>{{$eventTypes->name}}</p>
                                    </div>

                                    <div class="card-block">
                                        <h4>Start Date</h4>
                                        <p>{{$event->start_date}}</p>
                                    </div>

                                    <div class="card-block">
                                        <h4>End Date</h4>
                                        <p>{{$event->end_date}}</p>
                                    </div>

                                    <div class="card-block">
                                        <h4>Event Details</h4>
                                        <p>{{$event->details}}</p>
                                    </div>
                                </div>

                                <h2>Tickets</h2>
                                @foreach($ticketTypes as $ticketType)


                                    <div class="card">
                                        <div class="card-header">
                                            <h3>{{$ticketType->name}}</h3>
                                            <p></p>
                                        </div>

                                        <div class="card-block">
                                                <img src="{{ asset('storage/images/'.$ticketType->image) }}"  class="thumbnail" style="height: 250px;" >

                                                <h4>Ticket Price</h4>
                                                <p>{{$ticketType->price}}</p>

                                                <h4>Ticket Quantity</h4>
                                                <p>{{$ticketType->quantity}}</p>
                                            <button type="submit" class="btn btn-primary">issue</button>
                                        </div>
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
