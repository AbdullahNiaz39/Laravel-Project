<!DOCTYPE HTML>
<html>

<head>
  <title>Gcoery store</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="/style/style.css" />
</head>
<body>
 <!-- <div id="main">  -->

    
<div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Grocery<span class="logo_colour">Shopping _@</span></a></h1>
          <h2>Fresh Grocery Avaible All time</h2>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li style="height:31px;" class={{request()->path()=='first'? 'selected':""}}><a href="/first">Home</a></li>
          <li class={{request()->path()=='abouts/create'? 'selected':""}}><a href="/abouts/create">Creates</a></li>
          <li style="height:31px;" class={{request()->path()=='abouts'? 'selected':""}}><a href="/abouts">Shopping Details</a></li>
          
          <li  style="height:31px;" class={{request()->path()=='informs/create'? 'selected':""}}><a href="/informs/create">Contact Us</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="content_header"></div>
    <div>

    

     
        @yield('main')
      </div>
      
      
      
      
      
      
    <div id="footer" >
      <p ><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <!-- <p>Copyright &copy; shadowplay_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p> -->
    </div>
    
  
 </body>


</html>
