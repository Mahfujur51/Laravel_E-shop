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
                           <a href="{{ route('show',$product->slug) }}"> {{$product->title}}</a>
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
    <div class="row mt-3">
        <div class="col-md-4 offset-md-4">{{$products->links()}}</div>
    </div>
