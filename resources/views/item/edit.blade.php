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
                                        <h3>Edit Items</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('items.update')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">name</label>
                                                <input type="text" value="{{$item->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">manufacturer</label>
                                                <input type="text" value="{{$item->manufacturer}}" class="form-control" name="manufacturer" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">image name</label>
                                                <input type="text" value="{{$item->image_name}}" class="form-control" name="image_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">manufactured date</label>
                                                <input type="text" value="{{$item->manufactured_date}}" class="form-control" name="manufactured_date" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <button type="submit" onclick='edited()' class="btn btn-primary">Submit</button>
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
        function edited () {
            alertify.success('Record edited');
        }
    </script>

@endsection
