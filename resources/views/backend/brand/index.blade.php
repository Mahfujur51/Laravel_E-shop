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

                 <td>Action</td>
             </tr>
             @foreach ($brand as $key=>$brands)
             {{-- expr --}}

             <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$brands->name}}</td>

                 <td><img src="{{asset('BrandImage/'.$brands->image)}}" alt=""></td>

                 <td>
                     <a href="{{ route('brand.edit',$brands->id) }}" class="btn btn-success">Edit</a>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$brands->id}}">
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
@foreach ($brand as $brands)
{{-- expr --}}

<div class="modal fade" id="delete-{{$brands->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Brand Name:  {{$brands->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a type="button" href="{{ route('brand.delete',$brands->id) }}" class="btn btn-primary">Delete Parmanent</a>
</div>
</div>
</div>
</div>
@endforeach
@endsection
