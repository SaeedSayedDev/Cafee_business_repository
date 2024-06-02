@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View Booking</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View Booking</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- View Booking elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">View Booking</h3>
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
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-6 ">

                                    <h3>View Booking</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href='{{url("/dashboard/booking")}}'>
                                        <button class="btn btn-primary">Back</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form role="form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Name</label>
                                <input class="form-control" value="{{$booking->name}}" readonly>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{$booking->email}}" readonly>
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{$booking->phone}}" readonly>
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <label>ofPeople</label>
                                <input type="text" class="form-control" value="{{$booking->ofPeople}}" readonly>
                            </div>



                            <div class="form-group col-md-6 mt-3">
                                <label>start Time</label>
                                <input type="text" class="form-control" value="{{substr($booking->startDateTime, 11)}}" readonly>
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <label>end Time</label>
                                <input type="text" class="form-control" value="{{substr( $booking->endDateTime, 11)}}" readonly>
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <label>table name</label>
                                <input type="text" class="form-control" value="{{$booking->tables->name}}" readonly>
                            </div>

                            <div class="form-group col-md-12 mt-3">
                                <label>Message</label>
                                <textarea class="form-control" readonly>{{$booking->message}}</textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection