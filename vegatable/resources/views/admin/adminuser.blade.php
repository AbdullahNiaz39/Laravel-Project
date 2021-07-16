@extends('layoutadmin')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin user</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
</head>


   
       
<body>

        <div class="container">
                <h2>Adminuser Dashboard Updation</h2>
                @if(\Session::has('success'))
            <div  class="alert alert-success">
<h4>{{\Session::get('success')}}</h4>
            </div>
        @endif
            @if(\Session::has('danger'))
            <div  class="alert alert-danger">
<h4>{{\Session::get('danger')}}</h4>
            </div>
        @endif  
               
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email_verifeid<th>
                        <!-- <th>Message</th> -->
                        <th>action</th>
                        <
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->email_verified_at}}</td>
                        <!-- <td>{{$admin->password}}</td>     -->
                        <td> <a href="/click_del/{{$admin->id}}"   class="btn btn-danger" role="button" >Delete</a></td>                   
                     <td> <a href="/admin/edituser/{{$admin->id}}"  style="margin-right:150px" class="btn btn-warning edit" role="button" >Edit</a></td>
                    </tr>
@endforeach
                    </tbody>
                </table>
                </div>
                </div>
                </body>
            @endsection
            
            