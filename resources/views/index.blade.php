@extends('fontend.master')
@section('title','Shop your product now')
@section('content')
        <div class="container">
            <div class="row mt-2">
               @include('layouts.inc.slider')
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header  mt-2 mb-2"><h4 class="text-center">Product Page</h4></div>
                    </div>
                    @include('Product.partials.all_product')
                </div>
            </div>


        </div>

@endsection
