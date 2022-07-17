@extends('layouts.dashboard_nav')
@section('content')

<style>
  .form{
    max-width: 500px;
    background-color: white;
    padding: 1%;
    
  }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center">
        <div class="form"  style="margin-top: 100px">
            @csrf
            <h3 class="row justify-content-center">View Account Details</h3><hr>
            <input type="hidden" value="{{$admin->id}}" name="id">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            @if (Session::has('message'))
            <script>
                swal('{{ Session::get('status') }}');  
            </script> 
                {{Session::forget('message')}}
            </div>
            @endif
            <div class="row justify-content-center mt-2">
                <div class="form-group col-md-10 mt-2">
                    <label for="email">Full Names</label>
                    <div class="input form-control"  >{{$admin->name}}</div>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="email">Email</label>
                    <div class="input form-control"  >{{$admin->email}}</div>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-10 mt-2">
                    <label for="email">Phone</label>
                    <div class="input form-control"  >{{$admin->phone}}</div>
                    <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-6">
                    @if(Session::get('role') == 'admin')
                    <a class="btn btn-primary" href="/admin/reset/{{$admin->id}}">Reset Account</a>
                    @endif
                    </div>
                </div>
        </div>
    </div>
     </div>

@endsection