@extends('fontend.master')
@section('title','Shop your product now')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">


                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @php
                            $i=1;
                            @endphp
                            @foreach ($products->images as $image)
                            <div class="carousel-item {{$i==1 ? 'active' : ''}}">
                                <img class="d-block w-100" src="{{asset('productImage/'.$image->image)}}" alt="First slide">
                            </div>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="card-text">
                        <p>Category <span class="badge badge-info">{{$products->category->name}}</span></p>
                          <p>Brand <span class="badge badge-info">{{$products->brand->name}}</span></p>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  mt-2 mb-2">
                    {{$products->title}}  <span class="badge badge-info">@if ($products->quantity>0)
                        {{$products->quantity}} Availabe
                        @else{
                        No Product Available
                    }
                @endif</span>
            </div>
            <div class="card-text">
                {{$products->description}}
            </div>
            <p class="font-weight-bold mt-4 text-center">Price:{{$products->price}}</p>
            <div class="card-footer">
                <div class="text-center">
                    <a href="" class="btn btn-outline-success text-center">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
