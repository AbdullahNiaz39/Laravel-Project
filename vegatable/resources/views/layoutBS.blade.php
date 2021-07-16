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

div[class *=col]{
    border: 1px solid blue;
    }
    </style>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Logo</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
        </ul>
    </nav>
   <br>


<div class="row">
     <div class="col-9">
     <div class="row">
     <div class="col-12"><p class='display-1'>para heading</p></div></div>
        <div class="row">
             <div class="col-12"></div>
     <p> @yield('content')</p></div>
     
     <p>Birmingham City wonderkid Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports    Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports   Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports</p> 
     
     </div>
     <div class="col-3"><p>Birmingham City wonderkid Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports    Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports   Jude Bellingham is set to turn down Manchester United for a move to Borussia Dortmund, reports</p> </div>
     </div>
     </div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>phone number:123456</p>
</div>



</body>
</html>