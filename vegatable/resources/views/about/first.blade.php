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
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  h3{
color:white;
  }
  </style>
</head>
<body>

<h1 style="text-align:center; color:skyBlue;">Welcome to Grocery</h1>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/shop.jpg" alt="Los Angeles" width="100%" height="300">
      <div class="carousel-caption">
        <h3>Store Food shop</h3>
        <p>We had such a great fresh Vegatables</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/kkk.jpg" alt="Chicago" width="100%" height="300">
      <div class="carousel-caption">
        <h3>Village vegatable Fruits</h3>
        <p>Thank you, for ording!</p>
      </div>  
         </div>
         <div class="carousel-item">
      <img src="/veb6.jpg" alt="Chicago" width="100%" height="300">
      <div class="carousel-caption">
        <h3>Village vegatable Fruits</h3>
        <p>Thank you, for ording!</p>
      </div>  
         </div>
    <div class="carousel-item">
      <img src="/veb2.jpeg" alt="New York" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Today fresh shop</h3>
        <p>Their is Salt, Mixture of Salt!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/veb8.jpg" alt="New York" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Today fresh shop</h3>
        <p>Buy Fresh fruits Here! We love the Big Apple...</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  
</div>



</body>
</html>



@endsection