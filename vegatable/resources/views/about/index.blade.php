
@extends('layout')
@section('main')
        <!-- insert the page content here -->
       


        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Gcoery</title>
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
<h1>Welcome to Grocery</h1>

<div class="row">
@foreach ($cards as $card)


 <div class="col-3">
    <div class="card mt-3" style="width:200px">
    <img class="card-img-top" src="{{$card->image?  $card->image:'foo.jpg'}}" alt="Card image" style="width:100%"> 
         <div class="card-header">
      <h4 class="card-title">{{$card->name}}</h4>
         </div>
      <div class="card-body">
      <p class="card-text">{{$card->description}}</p>
      <p class="card-text">Price: {{$card->price}}</p>
     
        </div>
      
        <div  class="card-footer">
      <a href="/card/{{$card->id}}" class="btn btn-primary">Buy</a>
      <!-- <a href="/detail/index/" class="btn btn-primary">detail</a> -->
        </div>
    </div>
  </div>
    @endforeach
</div><br>
<div  style="margin-left: 350px"> {{$cards->links()}}</div>
<div style="margin-top:100px;"></div>
</div>
</body>
</html>

@endsection
       

     

       
      
    
    

   