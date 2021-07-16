@extends('layoutadmin')
@section('content')


<form  action="/updated/{{$admin->id}}" method="post">
    {{csrf_field()}}
      <!-- <h2 style="text-align:center">Edit form</h2> -->
    <div class="form-group">
    <label for="name">Name:</label>
        <input type="text" class="form-control" required name="name" value="{{$admin->name}}" placeholder="Enter Name" id="name">
        @error('name')
        <span>{{$errors->first('name')}}</span><br>
        @enderror
    </div>
        <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" required class="form-control" value="{{$admin->email}}" placeholder="Enter email" id="email">
            @error('email')
            <span>{{$errors->first('email')}}</span><br>
            @enderror
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" required value="{{$admin->password}}" class="form-control" placeholder="Enter password" id="password">
                    @error('password')
                    <span>{{$errors->first('password')}}</span><br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="eml">Email verified:</label>
                    <input type="date" name="email_verified_at" required value="{{$admin->email_verified_at}}" class="form-control"  >
                    @error('email_verified_at')
                    <span>{{$errors->first('email_verified_at')}}</span><br>
                    @enderror
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">update</button>
                </div>
            </form>
           



@endsection