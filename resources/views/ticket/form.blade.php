@extends('layouts.app')
@section('content')

    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-clipboard bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Basic Form Inputs</h5>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Basic Form Inputs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3>View Tickets</h3>
                                    </div>


                                    <div class="card-body">
                                        <form action="{{route('events.filterTickets')}}" method="POST" id="filterEventsForm" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event </label>
                                               <select class="select2 form-control" id="event" name="event">
                                                   <option value="">-- Select an Option --</option>
                                                   @foreach($events as $key=>$value)
                                                       <option value="{{$value->id}}">{{ucfirst(strtolower($value->name))}}</option>
                                                   @endforeach
                                               </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Ticket Type</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="ticketType" id="ticketType">

                                                    </select>
                                                </div>

                                                @error('ticketType')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>



                                            <button type="submit" class="btn btn-primary">View</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(
            function (){
                // $('.select2').select2();
                let eventFilter = (id) =>{
                    $.get('{{route('event.type.filter',['id'=>false])}}'+'/'+id).then((data)=>{
                        console.log(data);
                        $('#ticketType').empty();

                        $.each(data.ticketType, function(key, value) {
                            $('#ticketType').append(`<option value="`+value.id+`">`+value.name+`</option>`);
                        });
                    });
                };

                {{--function eventFilter2(id){--}}
                {{--   fetch('{{route('event.type.filter',['id'=>false])}}'+'/'+id,{method:'GET'}).then((data)=>{--}}
                {{--        console.log(data);--}}
                {{--        $.each(data.ticketType, function(key, value) {--}}
                {{--            $('#eventType').empty();--}}
                {{--            $('#eventType').append(`<option value="`+value.id+`">`+value.name+`</option>`);--}}
                {{--        });--}}
                {{--    });--}}
                {{--}--}}

                $('#event').on('change',function (event){
                    let id = $(this).val();
                    eventFilter(id);
                });

                let filterData = () =>{
                    var form = document.getElementById('filterEventsForm');
                    form.onsubmit((event)=>{
                        event.preventDefault();
                    });
                }
            }
        );
    </script>
@endsection
