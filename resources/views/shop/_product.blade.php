

<div class="card bg-light " style="width: 300px; margin-top: 10px">
	@if($product->recommended)
		<div class="recommended card-header h5" style="font-weight: bold; ">Рекомендуем</div>
	@endif
   <div class="card-body" >

   <div><strong> Category:</strong> {{$product->category->name ?? '-'}}</div>

    <a href="/product/{{$product->slug}}">
        <img src="{{$product->img}}" alt="{{$product->img}}" class="img-fluid">
         <h5 class="card-title"> {{$product->name}}</h5>
       
        <div class="border-top">
         <strong style="color: black">Price: </strong>{{$product->price}}
        </div>
      </a>
  </div>
<br>


</div>