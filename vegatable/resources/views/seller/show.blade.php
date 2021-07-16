@extends('layout')
@section('content')
<h1>{{$seller->name}}</h1>

   @foreach($seller->products as $product)
   <h5>{{$product->name}}</h5>
<h5>{{$product->price}}</h5>
<h5>{{$product->description}}</h5>
@endforeach
@endsection