@extends('layout')
@section('main')
<form action="/contacts/{{$contact->id}}" method="post"> 
@csrf
@method('PUT')
<input type="text" placeholder="Enter the Book Name" name="name" value="{{old('name'),$Book->name}}"><br>
@error('name')
<span>{{$errors->first('name')}}</span><br>
@enderror
<input type="text" placeholder="Enter writer name" name="phone_number" value="{{old('phone_number'),$Book->phone_number}}"><br>
@error('phone_number')
<span>{{$errors->first('phone_number')}}</span><br>
@enderror
<button type="submit">update</button>
</form>
@endsection