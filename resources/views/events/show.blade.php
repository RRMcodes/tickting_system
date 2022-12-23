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

                                    <a type="submit" href="{{route('events.storeTickets', ['id' => $event->id])}}" class="btn btn-primary"  style="display: inline;float: right">issue all tickets</a>


                                </div>

                                <h2>Tickets</h2>
                                @foreach($ticketTypes as $ticketType)


                                    <div class="card">

                                        <div class="card-header">
                                            <h3 style="display: inline; float: left">{{$ticketType->name}}</h3>

                                            <div class="form-check" style="display: inline;float: left;font-size: large; margin-left: 30px">
                                                <input style="height: 20px; " class="form-check-input"  type="checkbox" value="{{$ticketType->id}}" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Select
                                                </label>
                                            </div>

                                        </div>

                                        <div class="card-block">
                                                <img src="{{ asset('storage/images/'.$ticketType->image) }}"  class="thumbnail" style="height: 250px;" >

                                                <h4>Ticket Price</h4>
                                                <p>{{$ticketType->price}}</p>

                                                <h4>Ticket Quantity</h4>
                                                <p>{{$ticketType->quantity}}</p>
                                            <button  type="submit" href="{{route('events.storeTickets', ['id' => $ticketType->id, 'eventID' => $event->id])}}" class="btn btn-primary">issue</button>
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

    <script>

        function select () {
            var chkbox = document.getElementsByClassName('form-check-input');
            for (var i = 0; i < chkbox.length; i++) {
                if (chkbox[i].type == 'checkbox')
                    chkbox[i].checked = true;
            }
        }

    </script>
@endsection()
