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

            @if(Session::has("errorss"))
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12 m-auto">
                    <div class="alert-warning shadow my-3" role="alert" style="border-radius: 0px">
                        <div class="row">
                            <div class="col-2">
                                <div class="text-center" style="background:#851304">
                                    <svg width="3em" height="3em" style="color:#FFF3CD" viewBox="0 0 16 16"  class="m-1 bi bi-cone-striped" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9.97 4.88l.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="alert col-10 my-auto">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="True" style="color:#8d4f3d">&times;</span>
                                </button>
                                <div class="row">
                                      <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Warning:</b>{{Session::get('errorss')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{Session::forget("errorss")}}
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
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
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