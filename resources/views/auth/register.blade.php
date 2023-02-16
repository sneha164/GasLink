@extends('layouts.app')

@section('content')
<section class=" register ">

    <div class="container" >
      <div class="row ">
        <div class=" form col-lg-6 col-md-6 col-sm-12  mt-5 ">
          <h1 class=" text-center">Create Account</h1>
      <p class="text-center">Get started with your free account</p>
      <p class="bottom">
          <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-google mx-3"> <i class="fa-brands fa-google"></i>   Login with Google</a>
          <a href="https://www.facebook.com/login.php" class="btn btn-block btn-facebook mx-3"> <i class="fab fa-facebook-f"></i>   Login with Facebook</a>
      </p>
      <p class="divider-text">
          <span>OR</span>
      </p>
      <form  method="POST" action="{{ route('register') }}">
        @csrf
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user mx-1"></i> </span>
           </div>
           <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope mx-1"></i> </span>
           </div>
           <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-phone  mx-1"></i> </span>
          </div>
          <input name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" required placeholder="Phone number" value="{{old('phone_number')}}" type="text">
        </div> <!-- form-group// -->
        @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
          </div>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
      </div> <!-- form-group// -->
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
          </div>
          <input class="form-control" name="password_confirmation" placeholder="Repeat password" type="password" required>
      </div> <!-- form-group// -->                                      
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
      </div> <!-- form-group// -->      
      <p class="text-center">Already have an account? <a href="{{ route('login') }}">Log In</a> </p>                                                                 
  </form>
          
          </div>  
          <div class="image col-lg-6 col-md-6 col-sm-12 mt-5 bg-white">
             
                  <img src="{{asset('user/images/screen.jpg')}}"  width="100%" height="550px">
                
                
          </div>
          
      </div>
  </div>
  
      </section>
@endsection
