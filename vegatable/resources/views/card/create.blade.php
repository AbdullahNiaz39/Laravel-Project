@extends('layoutadmin')
@section('content')

<body>
<div class="container">

<h1> Card Data Entry</h2>
  
  <form action="/abouts" method="post" class="was-validated" enctype="multipart/form-data">
  
  @csrf

        <div class="form-group">
        <label for="file">Card file:</label>
    <input type="file" id="file" name="image" class="form-control-file border" accept="image/*">
        </div>

        
    <div class="form-group">
      <label for="name">card name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Product" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="description">card description:</label>
      <input type="text" class="form-control" id="decsription" placeholder="Enter description" name="description" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="form-check-price">card Price:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Price" name="price" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
@endsection