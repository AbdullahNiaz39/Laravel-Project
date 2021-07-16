@extends('layout')
@section('main')
<div class="row">
@foreach ($cards as $card)


 <div class="col-3">
    <div class="card mt-3" style="width:200px">
    <<img class="card-img-top" src="{{$card->image?  $card->image:'foo.jpg'}}" alt="Card image" style="width:100%"> 
         <div class="card-header">
      <h4 class="card-title">{{$card->name}}</h4>
         </div>
      <div class="card-body">
      <p class="card-text">{{$card->description}}</p>
      <p class="card-text">{{$card->price}}</p>
     
        </div>
      
        <div  class="card-footer">
      <a href="/{{$card->id}}" class="btn btn-primary">open</a>
        </div>
    </div>
  </div>
    @endforeach
</div>
@endsection