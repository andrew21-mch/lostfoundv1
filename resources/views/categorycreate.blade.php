@extends('layouts.dashboard_nav')
@section('content')

<style>
  .form{
    max-width: 500px;
    background-color: white;
    
  }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center">
  <form action="/" method="post" class="form"  style="margin-top: 100px">
    @csrf
    <h1 class="row justify-content-center">Add Category</h1><br>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
          <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
          </div>
        </div>

      <div class="row justify-content-center">
        <div class="form-group col-md-4">
          <button class="btn btn-primary" type="submit">Add</button>
        </div>
      </div>
  </div>

  </form>
     </div>

@endsection