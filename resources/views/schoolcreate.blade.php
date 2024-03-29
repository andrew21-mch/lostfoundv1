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
  <form action="/create/school" method="post" class="form"  style="margin-top: 100px; margin-bottom: 100px;">
    @csrf
    <h1 class="row justify-content-center">Add School</h1><br>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2">
          <label for="name">School Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
          <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
          </div>
        </div>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2" >
          <label for="desc">School Location</label>
          <input type="text" class="form-control" id="desc" name="desc" required >
          @error ('location')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2" >
          <label for="contact">School Contact</label>
          <input type="tel" class="form-control" id="contact" name="contact" required >
          @error ('contact')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="form-group col-md-4">
          <button class="btn btn-primary" type="submit">Register School</button>
        </div>
      </div>
  </div>

  </form>
     </div>

@endsection