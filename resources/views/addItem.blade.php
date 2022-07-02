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
            <h2 class="row justify-content-center">Add Missing Item</h2><br>
            @if(Session::has("message"))
                        <div class="alert alert-success">
                            <span>
                                {{Session::get("message")}}
                            </span>
                            {{Session::forget("message")}}
                        </div>
                        @endif
            <div class="row justify-content-center mt-2">
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Item Description</label>
                    <input type="text" class="form-control" id="name" name="desc" required>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                    </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Owner</label>
                    <input type="text" class="form-control" id="name" name="owner" placeholder="Optional">
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-md-5 mt-2">
                    <label for="name">Item Category</label>
                    <select class="form-control" id="name" name="category" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group col-md-5 mt-2">
                        <label for="name">Hosting School</label>
                        <select class="form-control" id="name" name="school" required>
                            <option value="">Select School</option>
                            @foreach($school as $cat)
                            <option value="{{$cat->schoolid}}">{{$cat->schoolname}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                        </div>
                </div>
                
                <div class="form-group col-md-10 mt-2">
                    <label for="name">Image</label>
                    <input type="file" class="form-control" id="name" name="image" placeholder="chose File">
                    <span class="text-danger">@error ('img') {{ $message }} @enderror</span>
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