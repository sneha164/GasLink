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
      <form>
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user mx-1"></i> </span>
           </div>
          <input name="" class="form-control" placeholder="Full name" type="text">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
    	<div class="input-group-prepend dropdown" height="38px">
		    <span class="input-group-text"> <i class="fa-solid fa-user-tag"></i></span>
		 </div>
         <select name="users" id="users">
            <option value="" disabled selected hidden>Choose User Type<option>
           <option value="volvo">Vendor</option>
           <option value="saab">Technician</option>
           <option value="opel">Customers</option>
         </select>
    </div>
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope mx-1"></i> </span>
           </div>
          <input name="" class="form-control" placeholder="Email address" type="email">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-phone  mx-1"></i> </span>
          </div>
          <input name="" class="form-control" placeholder="Phone number" type="text">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
          </div>
          <input class="form-control" placeholder="Create password" type="password">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
          </div>
          <input class="form-control" placeholder="Repeat password" type="password">
      </div> <!-- form-group// -->                                      
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
      </div> <!-- form-group// -->      
      <p class="text-center">Already have an account? <a href="login.html">Log In</a> </p>                                                                 
  </form>
          
          </div>  
          <div class="image col-lg-6 col-md-6 col-sm-12 mt-5 bg-white">
             
                  <img src="{{asset('user/images/screen.jpg')}}"  width="100%" height="550px">
                
                
          </div>
          
      </div>
  </div>
  
      </section>
@endsection