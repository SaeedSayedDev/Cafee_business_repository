@extends('aPanal._Layout')
@section('title', 'register')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>edit Admin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">edit Admin</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- edit Admin elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">edit Admin</h3>
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
        <form action='{{url("/dashboard/admin/$admin->id")}}' method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$admin->name}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{$admin->email}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
        </form>
    </div>

    <!-- /.card-body -->
</div>
@endsection