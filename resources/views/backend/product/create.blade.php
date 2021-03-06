@extends('backend.layouts.master')
@section('title','Create Product')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-header text-center">Add Product</h4>
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form class="forms-sample" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Product Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Description</label>
          <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">Price</label>
          <input type="number" name="price" class="form-control" id="exampleInputCity1" placeholder="Price">
        </div>
        <div class="form-group">
          <label for="">Select Category</label>
          <select name="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach (App\Category::OrderBy('id','desc')->Where('parent_id',NULL)->get(); as $parent_cat)
            <option value="{{$parent_cat->id}}">{{$parent_cat->name}}</option>
            @foreach (App\Category::OrderBy('id','desc')->Where('parent_id',$parent_cat->id)->get(); as $child_cat)
            <option value="{{$child_cat->id}}">---->{{$child_cat->name}}</option>
            @endforeach
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Select Brand</label>
          <select name="brand_id" class="form-control">
            <option value="">Select Brand</option>
            @foreach (App\Brand::OrderBy('id','desc')->get(); as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputCity1">Quentity</label>
          <input type="number" name="quantity" class="form-control" id="exampleInputCity1" placeholder="Quantity">
        </div>
        <div class="form-gorup mb-2">
          <label for="">Image</label>
          <div class="row">
            <div class="col-md-4"> <input type="file" name="image[]"></div>
            <div class="col-md-4">  <input type="file" name="image[]"></div>
            <div class="col-md-4"><input type="file" name="image[]"></div>
          </div>
        </div>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection
