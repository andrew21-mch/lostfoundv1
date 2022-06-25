@extends('layouts.app')
@section('content')
        <div class="container" style="padding-top:40px;padding-bottom:20px;padding-right:20px;padding-left:40px; height:80%;">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                      <center>
                          <h2 class="card-header" style="padding:2%">Register</h2>
                        </center>
                      <div class="card-body">
                        <form action="/create_account" method="post">
                          @csrf
                              <div class="form-group row justify-content-center">
                                    <div class="col-md-6">
                                      <label for="name" >First Name</label>
                                        <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                      <label for="lname" >Last Name</label>
                                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="lname">

                                        @error('lname')
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

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-group row justify-content-center">
                                  <div class="col-md-6">
                                    <label for="subject" >{{ __('Subject') }}</label>
                                    <select class="form-control" name="subject">
                                      <option value="">Select Subject</option>
                                      @foreach($subject as $subject)
                                      <option value="{{$subject->id}}">{{$subject->name}}</option>
                                      @endforeach
                                    </select>
                                        @error('subject')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror

                                  </div>
                                  <div class="col-md-6">
                                    <label for="subject" >{{ __('Subject') }}</label>
                                    <select class="form-control" name="subject">
                                      <option value="">Select Role</option>
                                      <option value="100">Teacher</option>
                                    </select>
                                        @error('subject')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror

                                  </div>
                              </div>

                              <div class="form-group row justify-content-center">
                                  <div class="col-md-6">
                                    <label for="password-confirm" >{{ __('Option') }}</label>
                                    <select class="form-control" name="option">
                                      <option value="">Select Option</option>
                                      @foreach($option as $option)
                                      <option value="{{$option->id}}">{{$option->name}}</option>
                                      @endforeach
                                    </select>
                                    @error('option')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                  <div class="col-md-6">
                                    <label for="verify" >{{ __('Verification') }}</label>
                                    <input id="verify" type="text" class="form-control @error('verify') is-invalid @enderror" name="verify" value="{{ old('verify') }}" required autocomplete="verify">
                                    @error('verify')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                              </div>




                              <div class="form-group row justify-content-center">
                                  <div class="col-md-6 mt-2">
                                    <label for="password" >{{ __('Password') }}</label>
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mt-2">
                                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  </div>
                              </div>


                              <div class="form-group row justify-content-center">

                              </div>

                              <div class="form-group row justify-content-center mb-0">
                                  <div class="col-md-6 offset-md-4 " style="margin-top:15px">
                                      <button type="submit" class="btn btn-primary" style="float:right">
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
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>
<script>
$(document).ready(function () {
  $("#test").CreateMultiCheckBox({ width: '230px',
             defaultText : 'Select Below', height:'250px' });
});
</script>