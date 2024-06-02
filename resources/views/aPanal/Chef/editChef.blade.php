@extends('aPanal._Layout')
@section('title', 'register')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">General Elements</h3>
    </div>
    <!-- /.card-header -->
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
    <!-- Errorrs -->
    <div class="card-body">
        @if(session()->get('Update_success'))
        <div class="alert alert-success">{{session()->get('Update_success')}}</div>
        @endif
        <form action="{{url("/dashboard/chef/$chef->id")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$chef->name}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="job_title" value="{{$chef->job_title}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" value="">
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
        </form>
    </div>

    <!-- /.card-body -->
</div>
@endsection