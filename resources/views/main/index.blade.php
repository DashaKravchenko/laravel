@extends('layouts.app')

@section('content')
    <h2 style="text-align: center;font-weight: bold">Caterories</h2>
  <div class="container">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-3">
              <div class="border">
              <a href="/category/{{$category->slug}}">
                  <img src="{{$category->img}}" alt="" class="img-fluid">
                  {{$category->name}} ({{$category->products->count()}})
                </a>
            </div>
          </div>   
        @endforeach
    </div>
  </div>
  <br>
  <h2 style="text-align: center;font-weight: bold;margin-right: 10px">Products</h2>
  <div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
              @include('shop._product')
          </div>   
        @endforeach
    </div>
  </div>
 </div>


<div class="container" >
<h2 class="text-center">Отзывы</h2>

  <div class="row">
    @foreach ($reviews as $review)
      <div class="col-3" >
        <div class="border" style="width: 250px; height:250px;padding:10px;margin-top:10px;background:rgb(235, 253, 185) ">
          <p><strong> User id:</strong>{{$review->user_id}}</p> 
          <p><strong> review:</strong>{{$review->review}}</p>
         
    </div>
  </div>   
@endforeach
<div>
</div>  


@endsection








