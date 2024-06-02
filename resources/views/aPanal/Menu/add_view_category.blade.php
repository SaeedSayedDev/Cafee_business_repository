@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Categories</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Categories</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">All Categories</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
    <!-- Errorrs -->
    <div class="card-body ">
        @if(session()->get('Add_success'))
        <div class="alert alert-success">{{session()->get('Add_success')}}</div>
        @endif
        @if(session()->get('Update_success'))
        <div class="alert alert-success">{{session()->get('Update_success')}}</div>
        @endif
        @if(session()->get('Deleted_success'))
        <div class="alert alert-success">{{session()->get('Deleted_success')}}</div>
        @endif
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>All Categories</h3>
                        </div>

                    </div>
                    <form action="{{url('/dashboard/menu/store')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-sm-10">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <!-- text input -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">index</th>
                                <th scope="col">Category</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach ($categories as $category)

                            <tr>
                                <td class="">{{$index}}</td>
                                <td class="w-50">{{$category->name}}</td>

                                <td>
                                <div class="row ">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#editExampleModal{{$category->id}}"><i class="fa fa-edit"></i></button>
                                        </div>

                                        <div class="col-3">
                                            <form action='{{url("/dashboard/menu/$category->id")}}' method="post">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you really want to delete post?')"><i class="fa fa-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                        <div class="modal fade" id="editExampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url("/dashboard/menu/$category->id")}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-sm-6 ">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Category</label>
                                                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Enter ..." value="{{old('name')}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 ">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        <button class="btn btn-primary" type="submit">Update</button>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   

                                </td>
                            </tr>
                            <?php $index++ ?>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection