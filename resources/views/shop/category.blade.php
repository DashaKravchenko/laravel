@extends('mainlayouts.main')

@section('content')

<h2>{{$category->name}}</h2>

<div class="container">
    <div class="row">
  <h2>Products</h2>
  <div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
              
              @include('shop._product')
          </div>   
        @endforeach
    </div>
    <div class="mt-5 d-flex justify-content-center">
{{ $products->links()}}
</div>
  </div>



@endsection