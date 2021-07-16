@extends('layout')
@section('content')
<div class="row">
@foreach($products as $product)
 <div class="col-3">
    <div class="card mt-3" style="width:200px">
    <img class="card-img-top" src="{{$product->image?  $product->image:'foo.jpg'}}" alt="Card image" style="width:100%">
         <div class="card-header">
      <h4 class="card-title">{{$product->name}}</h4>
         </div>
      <div class="card-body">
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">{{$product->price}}</p>
      <p class="card-text">{{$product->type}}</p>
        </div>
      
        <div  class="card-footer">
      <a href="/{{$product->id}}" class="btn btn-primary">open</a>
        </div>
    </div>
  </div>
    @endforeach
</div>
@endsection