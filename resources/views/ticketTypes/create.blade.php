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
                                        <h3>Create Ticket</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{route('ticketTypes.store')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Ticket Type</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Event ID</label>
                                                <input type="text" class="form-control @error('eventID') is-invalid @enderror"  name="eventID" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('eventID')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                                <input type="text" class="form-control @error('quantity') is-invalid @enderror"  name="quantity" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('quantity')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Price</label>
                                                <input type="text" class="form-control @error('price') is-invalid @enderror"  name="price" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Price</label>
                                                <input type="text" class="form-control @error('price') is-invalid @enderror"  name="price" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                @error('price')
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
