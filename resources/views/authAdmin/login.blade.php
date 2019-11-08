
@extends('layouts.adminAuth')

@section('content')

<div class="login-box">
        <div class="login-logo">
          <a href="/"><b>Admin</b> LAND SEARCH</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form method="POST" action="{{ route('admin.login.submit') }}">
              <div class="row" >
                  @include('messages')
              </div>
              @csrf
              {{ csrf_field() }}
            <div class="form-group has-feedback">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback">

                      {{--  <div class="col-md-12">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>  --}}

              </span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback">

                      {{--  <div class="col-md-12">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>  --}}

              </span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                          {{--  <input type="checkbox"> Remember Me  --}}
                          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
              Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
              Google+</a>
          </div>
          <!-- /.social-auth-links -->

          <a href="#">I forgot my password</a><br>
          <a href="{{ route('admin.register') }}" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
      </div>

@stop
