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
                                        <h3>Create Blog</h3>
                                    </div>

                                    <div class="card-body">
        <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" name="title" @error('title') is-invalid @enderror id="exampleFormControlInput1" >

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input type="file" class="form-control" name="image_name" @error('image_name') is-invalid @enderror id="exampleFormControlInput1" >

                @error('image_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" @error('description') is-invalid @enderror id="exampleFormControlTextarea1" rows="3"></textarea>

                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Text</label>
                <textarea class="form-control" name="text" @error('text') is-invalid @enderror id="exampleFormControlTextarea1" rows="5"></textarea>

                @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
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
