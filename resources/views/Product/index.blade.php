@extends('fontend.master')
@section('title','Shop your product now')
@section('content')
<div class="container">
    <div class="row mt-2">
     @include('Product.inc.slider')
     <div class="col-md-9">
        <div class="card">
            <div class="card-header  mt-2 mb-2"><h4 class="text-center">All Product</h4></div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            {{-- expr --}}
            <div class="col-md-3 mb-2">
                <div class="card">
                    <div class="card-img-top">
                        @php
                        $i=1;
                        @endphp

                        @foreach ($product->images as $image)
                        @if ($i>0)
                        <img src="{{asset('productImage/'.$image->image)}}" height="300" alt="">

                         @endif
                         @php
                             $i--;
                         @endphp
                        @endforeach

                    </div>
                    <div class="card-header">
                        <div class="text-center">
                            {{$product->title}}
                        </div>
                    </div>
                    <div class="card-title">
                     <div class="text-center">
                         Price:{{$product->price}}$
                     </div>
                 </div>
                 <div class="card-footer text-center">
                    <a href="" class="btn btn-outline-success ">Add to cart</a>

                </div>
            </div>
        </div>

        @endforeach



    </div>
</div>
</div>


</div>

@endsection
