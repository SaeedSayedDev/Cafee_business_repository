@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Messages</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Messages</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">All Messages</h3>
    </div>

    <!-- Errorrs -->
    <div class="card-body ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>All Messages</h3>
                        </div>

                    </div>


                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">index</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach ($messages as $message)

                            <tr class="@if($message->is_reading == 'not_reading') text-danger @endif">
                                <td class="">{{$index}}</td>
                                <td class="">{{$message->name}}</td>
                                <td class="w-25">{{$message->email}}</td>
                                <td class="">{{$message->subject}}</td>
                                <td>

                                    <div class="row ">
                                        <div class="col-3">
                                            <a class="text-white" href='{{url("/contact/show/$message->id")}}'> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title=""><i class="fa fa-edit"></i></button></a>
                                        </div>

                                        <div class="col-3">
                                            <form action='{{url("/contact/$message->id")}}' method="post">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you really want to delete post?')"><i class="fa fa-trash"></i></button>
                                                @csrf
                                                @method('delete')
                                            </form>
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