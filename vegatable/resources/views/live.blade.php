@extends('layout')
@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>simplestyle_blue_trees</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="/style/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
   
       


        <div class="container">
                <h2>Dark Striped Table</h2>
                <p>Combine .table-dark and .table-striped to create a dark, striped table:</p>
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
                        <td> <a href="#" class="btn btn-danger" role="button" >Edit</a></td>
                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>
            </body>
</html>

@endsection