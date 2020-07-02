@extends('fontend.master')
@section('title','Shop your product now')
@section('content')
<div class="container">
    <div class="row mt-2">
       @include('Product.inc.slider')
       <div class="col-md-9">
        <div class="card">
            <div class="card-header  mt-2 mb-2"><h4 class="text-center">All Product in <span class="badge badge-info">{{$category->name}}</span></h4></div>
        </div>
        @php
        $products=$category->products()->paginate(12);
        @endphp
        @if ($products->count()>0)
        {{-- expr --}}

        @include('Product.partials.all_product')
        @else
        <div class="alert alert-warning">No Product In this Category</div>
        @endif
    </div>
</div>


</div>

@endsection
