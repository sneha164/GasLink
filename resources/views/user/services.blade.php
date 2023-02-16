@extends('user.layouts.app')
@section('content')
 <!--section breadcrumb start-->
 <section class="breadcrumbs">
    

    <div class="d-flex text bg-light mt-5 p-5 justify-content-between align-items-center">
        <h2>Services</h2>
        <ul>
            <li class="mx-2"><a href="index.html">Home</a></li>
            <li >Services</li>
        </ul>
    </div>


</section>
<!--section breadcrumb end-->
<!--section services started-->
<section class="services">
<div class="container">
    <div class="row">
        
        <h1 class="text-center p-3">Our Services</h1>
        <div class="image col-lg-6 col-md-6 col-sm-12 mb-5">
            <img src="{{asset('user/images/why.jpg')}}" width="100%" height=605px;>
        </div>
        <div class="text col-lg-6 col-md-6 col-sm-12 mb-5">
            
            <div class="item bg-light p-2">
                <div class="left">
                    <img src="{{asset('user/images/payment-method.png')}}" height="90px" >
                
                </div>

                <div class="right">
                    <h4 class="text-center">Pre Booking</h4>
                    <p class="text-center">We Provide pre booking for various types of gas cylinder.</p>
                </div>
            </div>
            <div class="item bg-light p-2 mt-5">
            <div class="left">
                <img src="{{asset('user/images/delivery.png')}}" height="90px">
            </div>

            <div class="right bg-light">
                <h4 class="text-center">Home Delivery</h4>
                <p class="text-center">  Get faster home delivery service with quick order processing & tracking.</p>
            </div>
            </div>
        
        <div class="item bg-light p-2 mt-5">
            <div class="left">
                <img src="{{asset('user/images/discount.png')}}" height="90px">
            </div>

            <div class="right">
                <h4 class="text-center">Discount</h4>
                <p class="text-center">Discounts are also provided. You can get discounts during the festive  season through which you can save your money.</p>
            </div>
        </div>
        <div class="item bg-light p-2 mt-5">
            <div class="left">
                <img src="{{asset('user/images/payment.png')}}" height="90px">
            </div>

            <div class="right">
                <h4 class="text-center">Payment Method</h4>
                <p class="text-center"> payment mode is totally depending upon you whether you want to pay by the credit cards or to cash on delivery..</p>
                       
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--section services ended-->
@endsection