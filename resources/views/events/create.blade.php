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
                                        <h3>Create Event</h3>
                                    </div>


                                    <div class="card-body">
                                        <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Type</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="type" id="exampleFormControlSelect1">
                                                        @foreach($eventTypes as $eventType)
                                                        <option value="{{$eventType->id}}">{{$eventType->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                @error('Type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start date</label>
                                                <input type="text" class="form-control @error('start_date') is-invalid @enderror " name="start_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('start_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">End Date</label>
                                                <input type="text" class="form-control @error('end_date') is-invalid @enderror " name="end_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('end_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event Details</label>
                                                <input type="text" class="form-control @error('details') is-invalid @enderror " name="details" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('details')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                                <input type="text" class="form-control @error('quantity') is-invalid @enderror " name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('quantity')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                             {{-- ticket type --}}
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Ticket Types</h5>
                                                        </div>
                                                        <div class="card-block">
                                                            <section class="task-panel tasks-widget">
                                                                <div class="panel-body">
                                                                    <ul id="_ticket_types_here">
                                                                        <a class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="#" id="_ticket_type_add"><i class="icofont icofont-plus"></i> Add Ticket type</a>
                                                                    <li id="_ticket_type1">
                                                                                            <a href="#" class="_delete_item" data-rem="#_ticket_type1">
                                                                                                <i class="icofont icofont-ui-delete delete_todo"></i>
                                                                                            </a>
                                                                            <br>
                                                                            <br>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Ticket Name</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" name="ticket_type_name[]"  placeholder="Text Input Validation">
                                                                                                <span class="messages"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Ticket Price</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="number" class="form-control" name="ticket_type_price[]" >
                                                                                                <span class="messages"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Ticket Quantity</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" name="ticket_type_quantity[]" >
                                                                                                <span class="messages"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Image</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="file" class="form-control" name="ticket_type_image[]"  accept='image/*' id="image" onchange="imageUpload('image','imagePreview')" >
                                                                                                <span class="messages"></span>
                                                                                            </div>
                                                                                            <div class="col-sm-10">
                                                                                                <img   class="thumbnail" style="height: 250px;" id="imagePreview">
                                                                                            </div>

                                                                                        </div>


                                                                        <div>

                                                                        </div>
                                                                    </li>

                                                                    </ul>
                                                                </div>
                                                            </section>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
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

        var option = '<a href="#" class="_delete_item" data-rem="#_ticket_type1"><i class="icofont icofont-ui-delete delete_todo"></i></a><br><br><div class="form-group row"> <label class="col-sm-2 col-form-label">Ticket Name</label> <div class="col-sm-10"> <input type="text" class="form-control" name="ticket_type_name[]"  placeholder="Text Input Validation"> <span class="messages"></span> </div> </div><div class="form-group row"> <label class="col-sm-2 col-form-label">Ticket Price</label> <div class="col-sm-10"> <input type="number" class="form-control" name="ticket_type_rate[]" > <span class="messages"></span> </div> </div><div class="form-group row"> <label class="col-sm-2 col-form-label">Ticket Quantity</label> <div class="col-sm-10"> <input type="text" class="form-control" name="ticket_type_qty[]" > <span class="messages"></span> </div> </div><div><a class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="#" data-toggle="modal" data-target="#flipFlop"><i class="icofont icofont-plus"></i> Add New Tasks</a></div>'

        $(function (){
            $(document).on('click','._delete_item',function (e){
                e.preventDefault();
                $($(this).data('rem')).remove();
            });
        });

        $(function (){
            $(document).on('click','#_ticket_type_add', function (e){
                e.preventDefault();
              var index = $('#_ticket_types_here').children().length + 1;
              $('#_ticket_types_here').append(getOption(index));
            });
        });

        function getOption(index){
            var option = '<li id="_ticket_type'+index+'">' +
                '<a href="#" class="_delete_item" data-rem="#_ticket_type'+index+'">' +
                '<i class="icofont icofont-ui-delete delete_todo"></i></a><br><br>' +
                '<div class="form-group row">' +
                '<label class="col-sm-2 col-form-label">Ticket Name</label>' +
                '<div class="col-sm-10">' +
                '<input type="text" class="form-control" name="ticket_type_name[]"  placeholder="Text Input Validation">' +
                '<span class="messages"></span>' +
                '</div>' +
                '</div>' +
                '<div class="form-group row">' +
                '<label class="col-sm-2 col-form-label">Ticket Price</label>' +
                '<div class="col-sm-10">' +
                '<input type="number" class="form-control" name="ticket_type_price[]" >' +
                '<span class="messages"></span>' +
                '</div>' +
                ' </div>' +
                '<div class="form-group row">' +
                '<label class="col-sm-2 col-form-label">Ticket Quantity</label>' +
                '<div class="col-sm-10">' +
                '<input type="text" class="form-control" name="ticket_type_quantity[]" >' +
                '<span class="messages"></span>' +
                '</div>' +
                '</div>' +
                '<div class="form-group row">' +
                '<label class="col-sm-2 col-form-label">Image</label>' +
                   ' <div class="col-sm-10">' +
                        '<input type="file" class="form-control" name="ticket_type_image[]" accept="image/*" id="image'+index+'" onchange="imageUpload('+"'image"+index+"'"+','+"'imagePreview"+index+"'"+')" />' + // Refer here later
                            '<span class="messages"></span>' +
                    '</div>' +
                    '<div class="col-sm-10">' +
                        '<img   class="thumbnail" style="height: 250px;" id="imagePreview'+index+'">' +
                    '</div>' +
                '</div>' +
                '<div>' +
                '</div></li>';
            return option;
        }

        function imageUpload(image,preview){

            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById(image).files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById(preview).src = oFREvent.target.result;
            };

        }


    </script>
@endsection
