@extends('layouts.nav')
@section('content')
<style>
form{
    border-style: groove;
    border-color: transparent;
    background-color:white;
    padding: 4%;
    margin-top: 20px;
    max-width: 500px;
    min-width: 250px;
   }
</style>

<div class="contain row m-auto">
    <div class="row justify-content-center">
        <div class="col-md-12 w-100">
            <form action="admin/register" method="post" enctype="multipart/form-data">
                @csrf
                        @if(Session::has("message"))
                        <div class="alert alert-danger">
                            <span>
                                {{Session::get("message")}}
                            </span>
                            {{Session::forget("message")}}
                        </div>
                        @endif
                @csrf
                    <div class="form-group row justify-content-center">
                        <div class="col-md-12">
                            <label for="name" >Full Names</label>
                            <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
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
                        <div class="col-md-12">
                        <label for="phone" >{{ __('Phone Number') }}</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 mt-2">
                        <label for="subject" >{{ __('Subject') }}</label>
                        <select class="form-control" name="school">
                            <option value="">Select School</option>
                            @foreach($school ?? '' as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                            @error('school')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="auth_key" >{{ __('Key') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="auth_key" required>
                                @error('auth_key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 mt-2">
                            <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-6 mt-2">
                            <label for="repeat" >{{ __('Repeat Password') }}</label>
                            <input id="repeat" type="password" class="form-control @error('password') is-invalid @enderror" name="repeat" required>
                                @error('repeat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    
                            </div>
                    </div>

                    <div class="form-group row justify-content-center ">
                        <div class="col-md-6 m-auto " style="">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>

            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>
<script>
</script>