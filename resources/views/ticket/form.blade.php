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
                                        <form action="#" method="POST" id="filterEventsForm" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event </label>
                                                <select class="select2 form-control" id="event" name="event" required>
                                                    <option value="">-- Select an Option --</option>
                                                    @foreach($events as $key=>$value)
                                                        <option value="{{$value->id}}">{{ucfirst(strtolower($value->name))}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Ticket Type</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="ticketType" id="ticketType" required>

                                                    </select>
                                                </div>

                                                @error('ticketType')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>



                                            <button type="submit" class="btn btn-primary">View</button>
                                        </form>

                                    </div>


                                    <div class="card-body">

                                        <table class="table table-striped table-bordered nowrap" id="myTable">
                                            <thead>
                                            <tr>
                                                <td>Sno</td>
                                                <td>ticket_type_id</td>
                                                <td>event_id</td>
                                                <td>ticket_number</td>
                                                <td>ticket_image</td>
                                                <td>price</td>
                                                <td>start_date</td>
                                                <td>end_date</td>
                                                <td>Actions</td>

                                            </tr>
                                            </thead>


                                        </table>

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

        var dataTable;
        $(function (){
            dataTable = $('#myTable').DataTable({
                pageLength: 8,
                ajax : '{{route('events.getTicketsJson')}}',
                columns: [
                    { data: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },name: "sn", searchable: false ,orderable:false},
                    {data:"ticket_type_id", name:"ticket_type_id"},
                    {data: "event_id", name: "event_id"},
                    {data: "ticket_number", name: "ticket_number"},
                    {data: "ticket_image", name: "ticket_image"},
                    {data: "price", name: "price"},
                    {data: "start_date", name: "start_date"},
                    {data: "end_date", name: "end_date"},
                    { data: function(data,b,c,table) {
                            var buttons = '';
                            buttons += "<a class='btn btn-sm btn-primary'  href='{{route('events.edit',array('id'=>false))}}"+"/"+data.id+"' type='button' title='Edit'><i class='fa fa-edit'></i></a>&nbsp";
                            buttons += "<a class='btn btn-sm btn-primary'  href='{{route('events.show',array('id'=>false))}}"+"/"+data.id+"' type='button' title='Show'> Issue</a>&nbsp";
                            buttons += "<a type='button'  data-id='"+data.id+"' class='btn btn-sm btn-danger del' title='Delete' ><i class='fa fa-trash'></i></a>";
                            return buttons;
                        }, name:'action',searchable: false,orderable: false},
                ]
            });

        });

        $(
            function (){
                // $('.select2').select2();
                let eventFilter = (id) =>{
                    $.get('{{route('events.filter',['id'=>false])}}'+'/'+id).then((data)=>{
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

                // let filterData = () =>{
                //     var form = document.getElementById('filterEventsForm');
                //     form.onsubmit((event)=>{
                //         event.preventDefault();
                //     });
                // }
                //
                // let Data = () =>{
                //     var form = document.getElementById('filterEventsForm');
                //     form.onsubmit((event)=>{
                //         event.preventDefault();
                //     });
                // }

                document.getElementById('filterEventsForm').onsubmit = function(event){
                    event.preventDefault();
                    var formData = new FormData(this);
                    var object = {};
                    formData.forEach(function(value, key){
                        object[key] = value;
                        console.log(object);

                    });
                    var json = JSON.stringify(object);
                    makeDatatable(json);
                };

                 const makeDatatable = async (formData) =>{
                     console.log(formData);
                    let result  =  await fetch("{{route('events.getTicketsJson')}}",{
                        method    : 'POST',
                        headers   :{
                            'Accept'        : 'application/json',
                            'Content-Type'  : 'application/json',
                        },
                        body    : formData,
                        cache   : "default",
                    });
                    console.log(result);
                     dataTable.ajax.url(result).load();
                };

            }
        );

        const table = $("#myTable");

        table.on('preXhr.dt',function (e,settings,data) {
            data.event = $('event').val();
            data.ticketType = $('ticketType').val();
        });

    </script>
@endsection
