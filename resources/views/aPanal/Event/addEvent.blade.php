@extends('aPanal._Layout')
@section('title', 'register')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Event</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Event</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">Add Event</h3>
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
        @if(session()->get('Add_success'))
        <div class="alert alert-success">{{session()->get('Add_success')}}</div>
        @endif
        <form action="{{url('/dashboard/event/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="event_name" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="event_image" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="event_price" class="form-control">
                    </div>
                </div>



                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Description Top</label>
                        <textarea type="text" name="event_desc_top" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Description Bottom</label>
                        <textarea type="text" name="event_desc_bottom" class="form-control"></textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-warning">Add</button>
        </form>
    </div>

    <!-- /.card-body -->
</div>
@endsection