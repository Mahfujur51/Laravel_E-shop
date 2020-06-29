@extends('backend.layouts.master')
@section('title','Show  Product list')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
   <div class="card">
       <div class="card-header">Show Porduct List</div>
       <div class="card-body">
           <table class="table table-{color}">
               <tr>
                   <td>Sl</td>
                   <td>Name</td>
                   <td>Description</td>
                   <td>Price</td>
                   <td>Quantity</td>
                   <td>Action</td>
               </tr>
               @foreach ($products as $key=>$product)
               {{-- expr --}}

               <tr>
                   <td>{{$key+1}}</td>
                   <td>{{$product->title}}</td>
                   <td>{{str_limit($product->description,20)}}</td>
                   <td>{{$product->price}}</td>
                   <td>{{$product->quantity}}</td>
                   <td>
                       <a href="{{ route('product.edit',$product->id) }}" class="btn btn-success">Edit</a>
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$product->id}}">
                        Delete
                      </button>
                  </td>
              </tr>
              @endforeach
          </table>
      </div>

  </div>
</div>
<!-- Modal -->
@foreach ($products as $product)
    {{-- expr --}}

<div class="modal fade" id="delete-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Title:  {{$product->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a type="button" href="{{ route('product.delete',$product->id) }}" class="btn btn-primary">Delete Parmanent</a>
</div>
</div>
</div>
</div>
@endforeach
@endsection
