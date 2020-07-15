@extends('layouts.app')

@section('content')


<div class=" text-center ">
<div class="card bg-light  " style="width:1200px;margin-left: 15%">
<h2 class="text-center">{{$product->name}}</h2>
   <div class="card-body " >

        <img src="{{$product->img}}" alt="{{$product->img}}" class="img-fluid">
         <h5 class="card-title"> {{$product->name}}</h5>
    
               <div><strong>Category:</strong>{{$product->category ? $product->category->name : "No category"}}</div>
               <div class="border-top">
                 <strong>Description:</strong>{{$product->description}}
               </div>
               <div class="border-top">
                 <strong>Price:</strong>{{$product->price}}
               </div>
           </div>

<h3>Add review</h3>
@guest
    Login or register
    @else
          <form action="/product/{{$product->slug}}" method="POST">
            @csrf
    <div class="form-group">
      <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
    <input type="hidden" name="product" value="{{$product->id}}">
    <input type="hidden" name="user" value="{{Auth::user()->id}}">
      <button class="btn btn-primary">Send</button>
    </div>
</form> 
@endguest
<br>
         <div class="container">
            <h2 class="text-center">Отзывы</h2>
              <div class="row">
                @foreach ($reviews as $review)
                <div class="col-6">
                  <div class="border" style="width: 500px; height:150px;padding:10px;margin-top:10px;background:rgb(235, 253, 185) ">
                      <p><strong> id:</strong>{{$review->user->name}}</p> 
                      <p><strong> review:</strong>{{$review->review}}</p>
                      <p><strong> product:</strong>{{$review->product->name}}</p> 
                </div>
              </div>   
            @endforeach
            </div> 
     </div>

<br>













  

@endsection