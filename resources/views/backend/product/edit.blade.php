@extends('backend.layouts.master')
@section('title','Edit Product')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-header text-center">Update Product</h4>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <ul>
                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="forms-sample" action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Product Title</label>
                <input type="text" name="title" class="form-control" value="{{$product->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$product->description}}</textarea>
            </div>


            <div class="form-group">
                <label for="exampleInputCity1">Price</label>
                <input type="number" name="price" class="form-control" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Quentity</label>
                <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}">
            </div>



         <button type="submit" class="btn btn-success mr-2">Update</button>
         <button class="btn btn-light">Cancel</button>
     </form>
 </div>
</div>
</div>

@endsection
