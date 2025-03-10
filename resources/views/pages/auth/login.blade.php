@extends('layouts.master')

@section('content')
<div class="auth-main">
    <div class="auth-wrapper v1">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            {{-- <div class="text-center">
              <a href="#"><img src="../assets/images/logo-dark.svg" alt="img" /></a>
              <div class="d-grid my-3">
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="../assets/images/authentication/facebook.svg" alt="img" /> <span> Sign In with Facebook</span>
                </button>
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="../assets/images/authentication/twitter.svg" alt="img" /> <span> Sign In with Twitter</span>
                </button>
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="../assets/images/authentication/google.svg" alt="img" /> <span> Sign In with Google</span>
                </button>
              </div>
            </div>
            <div class="saprator my-3">
              <span>OR</span>
            </div> --}}
            <h4 class="text-center f-w-500 mb-3">Login with your email</h4>
            <div class="mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" />
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="floatingInput1" placeholder="Password" />
            </div>
            <div class="d-flex mt-1 justify-content-between align-items-center">
              <div class="form-check">
                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
              </div>
              <h6 class="text-secondary f-w-400 mb-0">
                <a href="{{ route('auth.forget') }}"> Forgot Password? </a>
              </h6>
            </div>
            <div class="d-grid mt-4">
              <button type="button" class="btn btn-primary">Login</button>
            </div>
            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
              <a href="{{ route('auth.register') }}" class="link-primary">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection