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
        <form action="/create/item" method="post" class="form"  style="margin-top: 100px" enctype="multipart/form-data">
            @csrf
            <h2 class="row justify-content-center">Update Account Details</h2><hr>

            <div class="row justify-content-center mt-2">
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$accountdetails->name}}" required>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" id="name" name="desc" value="{{$accountdetails->email}}" required>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                    </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Password</label>
                    <input type="text" class="form-control" id="name" name="password" placeholder="Optional" required>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-4">
                    <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
        </div>
  </form>
     </div>

@endsection