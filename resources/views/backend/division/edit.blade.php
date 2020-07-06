@extends('backend.layouts.master')
@section('title','Update Divsion')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-header text-center mb-3">Update Divison</h4>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="forms-sample" action="{{ route('division.update',$division->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Brand Name</label>
                    <input type="text" name="name" class="form-control" value="{{$division->name}}">
                </div>
                 <div class="form-group">
                    <label for="exampleInputName1">Piority </label>
                    <input type="text" name="piority" class="form-control" value="{{$division->piority}}">
                </div>


                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
