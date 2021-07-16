@extends('layout')
@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alerts</h2>
  
  <div class="alert alert-info">
    <strong>Info!</strong> Your Order in processing, Please wait for our message in your number
    <h1>{{$card->name}}</h1>
<h1>{{$card->price}}</h1>
<h1>{{$card->description}}</h1>
  </div>
  
</div>
<div style="margin-top:400px"></div>

</body>
</html>


@endsection