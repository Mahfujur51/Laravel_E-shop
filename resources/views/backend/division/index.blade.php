@extends('backend.layouts.master')
@section('title','Division list')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
   <div class="card">
       <div class="card-header">Show Porduct List</div>
       <div class="card-body">
           <table class="table table-{color}">
               <tr>
                   <td>Sl</td>
                   <td>Name</td>
                   <td>Piority</td>

                   <td>Action</td>
               </tr>
               @foreach ($division as $key=>$divisions)
               {{-- expr --}}

               <tr>
                <td>{{$key+1}}</td>
                <td>{{$divisions->name}}</td>

                <td>{{$divisions->piority}}</td>

                <td>
                    <a href="{{ route('division.edit',$divisions->id) }}" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$divisions->id}}">
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
@foreach ($division as $divisions)
{{-- expr --}}

<div class="modal fade" id="delete-{{$divisions->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Brand Name:  {{$divisions->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a type="button" href="{{ route('division.delete',$divisions->id) }}" class="btn btn-primary">Delete Parmanent</a>
</div>
</div>
</div>
</div>
@endforeach
@endsection
