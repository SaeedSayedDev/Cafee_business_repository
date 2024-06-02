@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View Message</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View Message</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- View Message elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">View Message</h3>
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

                                    <h3>View Message</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href='{{url("/dashboard/messages")}}'>
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
                                <input class="form-control" value="{{$message->name}}" readonly>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{$message->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>Subject</label>
                            <input type="text" class="form-control" value="{{$message->subject}}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label>Message</label>
                            <textarea class="form-control" readonly>{{$message->message}}</textarea>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection