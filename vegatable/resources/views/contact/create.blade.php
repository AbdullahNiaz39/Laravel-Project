@extends('layout')
@section('main')
<form action="/contacts" method="post">
@csrf
<input type="text" placeholder="Enter the Name" name="name"><br>
<input type="text" placeholder="Enter phone number" name="phone_number"><br>
<button type="submit">Add</button>
</form>
@endsection
