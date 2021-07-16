@extends('layoutadmin')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
</head>


   
       


        <div class="container">
                <h2>Grocery Form Data</h2>
                @if(\Session::has('success'))
            <div  class="alert alert-success">
<h4>{{\Session::get('success')}}</h4>
            </div>
        @endif
            @if(\Session::has('danger'))
            <div  class="alert alert-danger">
<h4>{{\Session::get('danger')}}</h4>
            </div>
        @endif  <a href="/admin/insert/"   class="btn btn-success" role="button" >Add Data</a><br><br>
               
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Ph.Number</th>
                        <th>action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                    <tr>
                        <td>{{$about->id}}</td>
                        <td>{{$about->name}}</td>
                        <td>{{$about->email}}</td>
                        <td>{{$about->password}}</td>
                        <td>{{$about->phonenumber}}</td>                       
                        <td> <a href="/admin/edit/{{$about->id}}"   class="btn btn-warning edit" role="button" >Edit</a></td>
                    <td> <a href="/click_delete/{{$about->id}}"  style="margin-left: -30px" class="btn btn-danger" role="button" >Delete</a></td>
                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>



            <div  style="margin-left: 350px"> {{$abouts->links()}}</div>



            </body>
@endsection