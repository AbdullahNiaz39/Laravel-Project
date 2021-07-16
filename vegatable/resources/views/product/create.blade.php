@extends('layout')
@section('content')
<div class="container">
  
  <form action="/" method="post" class="was-validated" enctype="multipart/form-data">
  
  @csrf
  <div class="form-group">
  <label for="sel1">Select Product type:</label>
      <select class="form-control" id="sel1" name="type">
        <option value="laptop">laptop</option>
        <option value="mobile">mobile</option>
        <option value="tablet">tablet</option>
        </select>
        </div>

        <div class="form-group">
        <label for="file">Product file:</label>
    <input type="file" id="file" name="image" class="form-control-file border" accept="image/*">
        </div>

        
    <div class="form-group">
      <label for="name">Product name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Product" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="description">Product description:</label>
      <input type="text" class="form-control" id="decsription" placeholder="Enter description" name="description" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="form-check-price">Product Price:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Price" name="price" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>

      <div class="form-group">
          <label for="sel2">tags</label>
          <select class="form-control" multiple id="sel2" name="tags[]">
      @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
        </select>
        @error('tags')
        <div class="invalid-feedback">$message</div>
        @enderror
        </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection