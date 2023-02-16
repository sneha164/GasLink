@section('content')
<section class="login">

    <div class="container" >
      <div class="row ">
        <div class="image col-lg-6 col-md-6 col-sm-12  mt-5 ">
          <img src="{{asset('user/images/bg.jpg')}}"  width="100%" height="550px">
          </div>
        <div class=" form col-lg-6 col-md-6 col-sm-12 p-5 mt-5 ">
          <div class="button">
          <p class="lead fw-normal mb-0 me-3">Sign in with</p>
          
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fa-brands fa-google"></i>
          </button>
        </div>
          <p class="divider-text">
                <span>OR</span>
            </p>
              <form class="mt-5">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-envelope mx-1"></i> </span>
                   </div>
                      <input name="" class="form-control" placeholder="Email address" type="email">
                  </div> <!-- form-group// -->
                  
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
                  </div>
                      <input class="form-control" placeholder="Password" type="password">
                  </div> <!-- form-group// -->
                 
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text text-lg-start mt-4 pt-2">
                  <button type="button" class="btn btn-primary mx-5 mb-3 btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mx-2 mb-0">Don't have an account? <a href="registration.html"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        
      </section>
    @endsection