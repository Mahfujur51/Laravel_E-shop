 <div class="col-md-3">
    <ul class="list-group">
        @foreach (App\Category::OrderBy('name','desc')->Where('parent_id',NULL)->get() as $category)
        {{-- expr --}}

        <a href="#main-{{$category->id}}" data-toggle="collapse" class="list-group-item"> <img src="{{asset('CategoryImage/'.$category->image)}}" alt="" height="50" width="50">{{$category->name}}</a>
        <div class="collapse" id="main-{{$category->id}}">
              @foreach (App\Category::OrderBy('name','desc')->Where('parent_id',$category->id)->get() as $child)
               <a href="{{ route('category.show',$child->id) }}" data-toggle="collapse"  class="list-group-item"> <img src="{{asset('CategoryImage/'.$child->image)}}" alt="" height="50" width="50">{{$child->name}}</a>
              @endforeach

        </div>
        @endforeach

    </ul>
</div>
