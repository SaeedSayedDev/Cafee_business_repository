@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Event Features</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event Features</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">Event Features</h3>
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
        @if(session()->get('Add_success'))
        <div class="alert alert-success">{{session()->get('Add_success')}}</div>
        @endif
        <form action="{{URL('/dashboard/event/feature/store')}}" method="post">
            @csrf
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Feature</label>
                        <input type="text" name="ourFeatures" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="event_id" value="{{$eventId}}">
                <button type="submit" class="btn btn-primary h-25 mt-4 pb-3  w-25">Add</button>
            </div>
        </form>
    </div>
</div>

@endsection