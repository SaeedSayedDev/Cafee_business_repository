@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Items</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Special Dishs</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">All Special Dishs</h3>
    </div>

    <!-- Errorrs -->
    <div class="card-body ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>All Special Dishs</h3>
                        </div>

                    </div>


                    <table class="table ">
                        <thead>
                            <tr>
                                <th class=" " scope="col">index</th>
                                <th class="w-25 " scope="col">Name</th>
                                <th class="w-25 " scope="col">title</th>
                                <th class="w-25 " scope="col">Image</th>
                                <th class="w-25 " scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach ($dishs as $dish)

                            <tr>
                                <td class=" ">{{$index}}</td>
                                <td class="w-25 ">{{$dish->dish_name}}</td>
                                <td class="w-25 ">{{$dish->dish_title}}</td>
                                <td class="w-25 "><img style="width:60px;height:60px" class="rounded-circle" src="{{asset("images/special/$dish->dish_image")}}" alt=""></td>

                                <td class="">
               
                                    <div class="row ">
                                        <div class="col-3">
                                            <a class="text-white" href="{{url("/dashboard/dish/$dish->id/edit")}}"> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title=""><i class="fa fa-edit"></i></button></a>
                                        </div>

                                        <div class="col-3">
                                            <form action="{{url("/dashboard/dish/$dish->id")}}" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you really want to delete post?')"><i class="fa fa-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>

                                    </div>


                                    <!-- <div class="row">
                                        <div class="col-md-6 pl-5">
                                            <button class="btn btn-primary "><a class="text-white" href="{{url("/dashboard/dish/$dish->id/edit")}}">Edit</a> </button>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{url("/dashboard/dish/$dish->id")}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('do you really want to delete post?')">delete </button>
                                            </form>
                                        </div>
                                    </div> -->
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