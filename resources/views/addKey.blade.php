@extends('layouts.dashboard_nav')
@section('content')

<style>
   .form{
    border-style: groove;
    border-color: transparent;
    background-color:white;
    padding: 4%;
    max-width: 500px;
   }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center">
        <div class="col-md-12 w-100">
                    <form method="POST" action="/admin/addkey" class="form" style="margin-top: 100px; margin-bottom: 100px" >
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
                              <label for="key">Key</label>
                                <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ old('key') }}" required autofocus>

                                @error('key')
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
