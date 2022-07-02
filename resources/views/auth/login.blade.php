@extends('layouts.nav')
@section('content')

<style>
  .form{
    border-style: solid;    
    border-color: gray;
    background-color:white;
    padding: 4%;
    margin-top: 20px;
    margin-bottom: 100px;
    max-width: 500px;
    min-width: 260px;
   }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center">
        <div class="col-md-12 w-100">
                    <form method="POST" action="/admin/login" class="form" >
                        <h2 class="m-auto" style="text-align: center">LOGIN</h2><hr>
                        @csrf
                        @if(Session::has("message"))
                        <div class="alert alert-success">
                            <span>
                                {{Session::get("message")}}
                            </span>
                            {{Session::forget("message")}}
                        </div>
                        @endif
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12"><br>
                              <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary justify-content-center" style="width:100px">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
