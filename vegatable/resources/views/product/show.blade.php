@extends('layout')
@section('content')
<h1>{{$product->name}}</h1>
<h1>{{$product->price}}</h1>
<h1>{{$product->description}}</h1>
<h1><a href="/sellers/{{$product->seller->id}}">{{$product->seller->name}}</a></h1>
@foreach($product->tags as $tag)
<a href="/?tag={{$tag->id}}">{{$tag->name}}</a>
@endforeach
@endsection