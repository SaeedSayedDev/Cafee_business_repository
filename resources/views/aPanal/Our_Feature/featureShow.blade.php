@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View Features</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">View Features</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- View Features elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">View Features</h3>
    </div>

    <!-- Errorrs -->
    <div class="card-body">

        <div class="container-fluid pt-4">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>{{$feature->title}}</h3>
                        </div>
                        <div>
                            <a href="{{url('/dashboard/feature')}}" class="text-decoration-none">Back</a>
                        </div>
                    </div>
                    <div>
                    {{$feature->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection