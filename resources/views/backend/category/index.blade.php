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
                   <td>Image</td>
                    <td>Parent Category</td>
                   <td>Action</td>
               </tr>
               @foreach ($category as $key=>$categories)
               {{-- expr --}}

               <tr>
                   <td>{{$key+1}}</td>
                   <td>{{$categories->name}}</td>

                   <td><img src="{{asset('CategoryImage/'.$categories->image)}}" alt=""></td>
                   <td>
                        @if ($categories->parent_id==NULL)
                          <span class="badge badge-success">Primary Category</span>
                          @else
                          <span class="badge badge-primary">{{$categories->parent->name}}</span>
                        @endif
                   </td>
                   <td>
                       <a href="{{ route('category.edit',$categories->id) }}" class="btn btn-success">Edit</a>
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$categories->id}}">
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
@foreach ($category as $categories)
    {{-- expr --}}

<div class="modal fade" id="delete-{{$categories->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Name:  {{$categories->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a type="button" href="{{ route('category.delete',$categories->id) }}" class="btn btn-primary">Delete Parmanent</a>
</div>
</div>
</div>
</div>
@endforeach
@endsection
