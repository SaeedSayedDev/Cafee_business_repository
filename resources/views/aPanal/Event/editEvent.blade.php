@extends('aPanal._Layout')
@section('title', 'register')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Event</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Event</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">Edit Event</h3>
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
        <form action="{{url("/dashboard/event/$event->id")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="event_name" value="{{$event->event_name}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="event_image"  class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="event_price" value="{{$event->event_price}}" class="form-control">
                    </div>
                </div>

                
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Description Top</label>
                        <textarea type="text" name="event_desc_top"  class="form-control">{{$event->event_desc_top}}</textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Description Bottom</label>
                        <textarea type="text" name="event_desc_bottom"  class="form-control">{{$event->event_desc_bottom}}</textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-warning" >Update</button>
        </form>
    </div>

    <!-- /.card-body -->
</div>
@endsection