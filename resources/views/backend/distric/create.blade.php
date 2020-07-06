@extends('backend.layouts.master')
@section('title','Add Distric')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-header text-center">Add Distric</h4>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="forms-sample" action="{{ route('distric.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Distric Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                 <div class="form-group">
                     <label for="">Division</label>
                     <select name="division_id" class="form-control" id="">
                         <option value="">Select Division</option>
                         @foreach ($division as $divisions)
                             {{-- expr --}}

                         <option value="{{$divisions->id}}">{{$divisions->name}}</option>
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
