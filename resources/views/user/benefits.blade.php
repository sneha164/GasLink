@extends('user.layouts.app')
@section('content')
 <!--section breadcrumb start-->
 <section class="breadcrumbs">
    

    <div class="d-flex text  mt-5 p-5 justify-content-between align-items-center">
        <h2>Benefits</h2>
        <ul>
            <li class="mx-2"><a href="index.html">Home</a></li>
            <li >Benefits</li>
        </ul>
    </div>


</section>
<!--section breadcrumb end-->
  <!--section benefits start-->
  <section class="benefits " id="tab-benefits">
            
    <h1 class="text-center"> Our <span>Benefits</span> </h1>
    <div class="container p-5 pb-0">
        <div class="row">
            <div class="owl-carousel">
            
                <div class="card p-4 mt-3">
                    <div class=" card-img-top ">
                    <img src="{{asset('user/images/payment-method.png')}}" width="90%" >
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">Easy Payment Method</h5>
                        
                    </div>
                </div>
            
            
                <div class="card p-4 mt-3">
                    <div class="card-img-top">
                    <img src="{{asset('user/images/tracking.png')}}"  >
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">Delivery tracking available</h5>
                        
                    </div>
                </div>
            
            
                <div class="card p-4 mt-3">
                    <div class="card-img-top">
                    <img src="{{asset('user/images/no-travelling.png')}}" width="90%" >
                    </div>
                    <div class="card-body text-center ">
                        <h5 class="card-title ">No hassle of traveling to gas agency</h5>
                        
                    </div>
                </div>
         
                <div class="card p-4 mt-3">
                    <div class="card-img-top">
                    <img src="{{asset('user/images/time-check.png')}}"  >
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">Refill can be booked anytime, anywhere</h5>
                        
                    </div>
                </div>
            
                <div class="card p-4 mt-3">
                    <div class="card-img-top">
                    <img src="{{asset('user/images/no-charges.png')}}"  >
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">No additional charges for booking online</h5>
                        
                    </div>
                </div>
         
                <div class="card p-4 mt-3">
                    <div class="card-img-top">
                    <img src="{{asset('user/images/safe.png')}}" >
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title ">Safe and convenient method of booking and refill</h5>
                        
                    </div>
                </div>
            </div>           
                           
         
        </div>
    </div>
</div>
</section>
<!--section benefits end-->
@endsection