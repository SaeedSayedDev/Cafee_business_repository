@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Informaition</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Informaition</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Add Informai=tion elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">Add Informaition</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
    <!-- Errorrs -->
    <div class="card-body">
        @if(session()->get('update_success'))
        <div class="alert alert-success">{{session()->get('update_success')}}</div>
        @endif
        <form action='{{url("/dashboard/information/1")}}' method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @foreach($informations as $information)
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Location</label>
                        <input value="{{$information->location}}" type="text" name="location" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Open Days</label>
                        <input value="{{$information->open_days}}" type="text" name="open_days" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Open Hours</label>
                        <input value="{{$information->open_hours}}" type="text" name="open_hours" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Email 1</label>
                        <input value="{{$information->email1}}" type="text" name="email1" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Email 2</label>
                        <input value="{{$information->email2}}" type="text" name="email2" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Phone 1</label>
                        <input value="{{$information->phone1}}" type="text" name="phone1" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Phone 2</label>
                        <input value="{{$information->phone2}}" type="text" name="phone2" class="form-control">
                    </div>
                </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection