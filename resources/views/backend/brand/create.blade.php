@extends('backend.layouts.master')
@section('title','Create Brand')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-header text-center">Add Brand</h4>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="forms-sample" action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Brand Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-gorup mb-2">
                    <label for="">Brand Image</label>
                    <div class="row">
                        <div class="col-md-4"> <input type="file" name="image"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
