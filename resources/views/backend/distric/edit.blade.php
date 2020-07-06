@extends('backend.layouts.master')
@section('title','Update Divsion')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-header text-center mb-3">Update Distric</h4>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="forms-sample" action="{{ route('distric.update',$distric->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Distric Name</label>
                    <input type="text" name="name" class="form-control" value="{{$distric->name}}">
                </div>
                 <div class="form-group">
                    <label for="">Division</label>
                    <select name="division_id" class="form-control" id="">
                          @foreach ($division as $divisions)
                              {{-- expr --}}

                            <option value="{{$divisions->id}}" {{ $divisions->id==$distric->division_id ? 'selected' : '' }}>{{$divisions->name}}</option>
                             @endforeach
                    </select>

                </div>


                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
