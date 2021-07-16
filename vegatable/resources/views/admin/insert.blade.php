@extends('layoutadmin')
@section('content')
<h1> Insert New User</h1>
    <form  action="/add_data" method="post">
        {{csrf_field()}}
        {{--    @method('PUT')--}}
        <div class="form-group">
            {{--        {{old('name',$about->name)}}--}}
            <label for="name">Name:</label>
            <input type="text" class="form-control" required name="name"  placeholder="Enter Name" id="name">
            @error('name')
            <span>{{$errors->first('name')}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" required class="form-control"  placeholder="Enter email" id="email">
            @error('email')
            <span>{{$errors->first('email')}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" required  class="form-control" placeholder="Enter password" id="password">
            @error('password')
            <span>{{$errors->first('password')}}</span><br>
            @enderror
        </div>
        <div class="form-group">
            <label for="number">Phone Number:</label>
            <input type="number" name="phonenumber" class="form-control" required   placeholder="Enter Phonenumber" id="number">
            @error('number')
            <span>{{$errors->first('number')}}</span><br>
            @enderror
        </div>

        <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
    @endsection