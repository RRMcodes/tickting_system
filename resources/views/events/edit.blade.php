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
                                        <h3>Edit event</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{route('events.update')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$event->id}}">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Type</label>
                                                <input type="text" value="{{$event->type}}" class="form-control @error('type') is-invalid @enderror"  name="type" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start date</label>
                                                <input type="text" value="{{$event->start_date}}"class="form-control @error('start_date') is-invalid @enderror " name="start_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('start_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">End Date</label>
                                                <input type="text" value="{{$event->end_date}}" class="form-control @error('end_date') is-invalid @enderror " name="end_date" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('end_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event Details</label>
                                                <input type="text" value="{{$event->details}}" class="form-control  @error('details') is-invalid @enderror " name="details" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('details')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                                <input type="text" value="{{$event->quantity}}" class="form-control @error('quantity') is-invalid @enderror " name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('quantity')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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

@endsection
