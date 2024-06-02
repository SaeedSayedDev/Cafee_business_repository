@extends('aPanal._Layout')
@section('title', 'register')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Menu Items</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Menu Items</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- general form elements disabled -->
<div class="card card-warning w-75 m-auto">
    <div class="card-header">
        <h3 class="card-title">Edit Menu Items</h3>
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
        <form action="{{url("/dashboard/menu/item/$item->id")}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" value="{{$item->price}}" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <label>Category</label>
                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            <option selected hidden value="{{$category->id}}">{{$category->name}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" name="description" class="form-control">{{$item->description}}</textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
        </form>
    </div>

    <!-- /.card-body -->
</div>
@endsection