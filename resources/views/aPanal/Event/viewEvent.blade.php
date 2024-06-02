@extends('aPanal._Layout')
@section('title', 'register')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Events</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Events</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">All Events</h3>
    </div>

    <!-- Errorrs -->
    <div class="card-body ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>All Events</h3>
                        </div>

                    </div>


                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">index</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach ($events as $event)

                            <tr>
                                <td class="">{{$index}}</td>
                                <td class="">{{$event->event_name}}</td>
                                <td class="">{{$event->event_price}}</td>
                                <td class=""><img style="width:70px;height:60px;" src="{{asset("Images/Event/$event->event_image")}}" alt=""></td>
                                <td class=""><a class="" href='{{url("/dashboard/event/feature/$event->id/edit")}}'><button class="btn btn-success text-white">To Feature</button></a></td>

                                <td>
                                    <div class="row ">
                                        <div class="col-3">
                                            <a class="text-white" href='{{url("/dashboard/event/$event->id/edit")}}'> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title=""><i class="fa fa-edit"></i></button></a>
                                        </div>

                                        <div class="col-3">
                                            <form action='{{url("/dashboard/event/$event->id")}}' method="post">
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