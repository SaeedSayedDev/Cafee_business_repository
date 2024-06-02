@extends('aPanal._Layout')
@section('title', 'register')

@section('content')



<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Chef Social</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Chef Social</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">All Chef Social</h3>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between border-bottom mb-5">
                        <div>
                            <h3>All Items</h3>
                        </div>

                    </div>



                    @if(session()->get('Update_success'))
                    <div class="alert alert-success">{{session()->get('Update_success')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>index</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>twitter</th>
                                <th>tiktok</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody >

                            <?php $index = 1 ?>
                            @foreach ($socials as $social)

                            <tr class=''>
                                <td style="width:10px">{{$index}}</td>
                                <td style="width:10px; background-color:red;" >{{$social->facebook}}</td>
                                <td >{{$social->instagram}}</td>
                                <td >{{$social->twitter}}</td>
                                <td >{{$social->tiktok}}</td>


                                <td >
                                    <div class="row ">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editExampleModal{{$social->id}}"><i class="fa fa-edit"></i></button></a>
                                        </div>

                                        <div class="col-3">
                                            <form action='{{url("/dashboard/chef/social/delete/$social->id")}}' method="post">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you really want to delete post?')"><i class="fa fa-trash"></i></button>
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                        <div class="modal fade" id="editExampleModal{{$social->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action='{{url("/dashboard/chef/social/$social->id")}}' method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">

                                                            <div class="col-sm-6">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Facebook</label>
                                                                    <input value="{{$social->facebook}}" type="text" name="facebook" class="form-control" placeholder="Link">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>instagram</label>
                                                                    <input value="{{$social->instagram}}" type="text" name="instagram" class="form-control" placeholder="Link">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>twitter</label>
                                                                    <input value="{{$social->twitter}}" type="text" name="twitter" class="form-control" placeholder="Link">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>tiktok</label>
                                                                    <input value="{{$social->tiktok}}" type="text" name="tiktok" class="form-control" placeholder="Link">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 ">
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
                    @if(!App\Models\ChefSocialmedia::where('chef_id' , 'chef_id'))
                    <a href='{{url("/dashboard/chef/social/create/$chef_id")}}' class="text-white"> <button class="btn btn-primary w-100 m-auto" type="button">Add Social</button></a>
                    @endif



                </div>
            </div>
        </div>
    </div>

</div>

</div>

@endsection