@extends('layoutadmin')
@section('content')


    <form  action="/update/{{$about->id}}" method="post">
    {{csrf_field()}}
      <!-- <h2 style="text-align:center">Edit form</h2> -->
    <div class="form-group">
    <label for="name">Name:</label>
        <input type="text" class="form-control" required name="name" value="{{$about->name}}" placeholder="Enter Name" id="name">
        @error('name')
        <span>{{$errors->first('name')}}</span><br>
        @enderror
    </div>
        <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" required class="form-control" value="{{$about->email}}" placeholder="Enter email" id="email">
            @error('email')
            <span>{{$errors->first('email')}}</span><br>
            @enderror
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" required value="{{$about->password}}" class="form-control" placeholder="Enter password" id="password">
                    @error('password')
                    <span>{{$errors->first('password')}}</span><br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number">Phone Number:</label>
                    <input type="number" name="phonenumber" class="form-control" required  value="{{$about->phonenumber}}" placeholder="Enter Phonenumber" id="phonenumber">
                    @error('phonenumber')
                    <span>{{$errors->first('phonenumber')}}</span><br>
                    @enderror
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
           



@endsection