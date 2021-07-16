@extends('layoutadmin')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
</head>


   
       


        <div class="container">
                <h2>Inform Dashboard Updation</h2>
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
                        <th>Message</th>
                        <th>action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($informs as $inform)
                    <tr>
                        <td>{{$inform->id}}</td>
                        <td>{{$inform->name}}</td>
                        <td>{{$inform->email}}</td>
                        <td>{{$inform->message}}</td>    
                        <td> <a href="/clic_delete/{{$inform->id}}"  style="margin-left: -30px" class="btn btn-danger" role="button" >Delete</a></td>                   
                     
                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>



            <div  style="margin-left: 350px"> {{$informs->links()}}</div>



            </body>
@endsection