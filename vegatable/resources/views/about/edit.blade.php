@extends('layout')
@section('main')

<form action="/abouts/{{$about->id}}" method="post" id="form"> 
<h1 class="form">edit</h1>
@csrf
@method('PUT')
<input type="text" placeholder="Enter the Name" name="name" value="{{old('name',$about->name)}}"  class="inputclass"><br>
@error('name')
<span>{{$errors->first('name')}}</span><br>
@enderror
<input type="email" placeholder="Enter email" name="email" value="{{old('email',$about->email)}}"  class="inputclass"><br>
@error('email')
<span>{{$errors->first('email')}}</span><br>
@enderror
<button type="submit" id="submit">update</button>
</form>
@endsection