@extends('user.layouts.app')
@section('content')
 <!--section breadcrumb start-->
 <section class="breadcrumbs">
    

    <div class="d-flex text bg-light mt-5 p-5 justify-content-between align-items-center">
        <h2>Contact Us</h2>
        <ul>
            <li class="mx-2"><a href="index.html">Home</a></li>
            <li >Contact</li>
        </ul>
    </div>


</section>
<!--section breadcrumb end-->
<!-- Start Contact  -->
<section class="contact">
    <div class="container" >
        <div class="row ">
          <div class="image col-lg-6 col-md-6 col-sm-12 ">
            <img src="{{asset('user/images/contact.png')}}"  width="100%" height="100%">
            
            </div>
          <div class=" form col-lg-6 col-md-6 col-sm-12 p-5 ">
            <h1 class="text-center">Get in Touch</h1>
            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label class="label" for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label class="label" for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                </div>
                <div class="col-md-12 mt-3">
                <div class="form-group">
                <label class="label" for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
                </div>
                <div class="col-md-12 mt-3">
                <div class="form-group">
                <label class="label" for="#">Message</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                </div>
                </div>
                <div class="col-md-12 mt-4">
                <div class="form-group bottom text-center">
                <input type="submit" value="Send Message" class="btn ">
                <div class="submitting"></div>
                </div>
                </div>
                </div>
                </form>
                    </div>
                    
        </div>
    </div>
</section>
 <!-- End Contact Area -->
 <!--section text started-->
 <div class=" contact-text bg-light">
    <div class="icon  text-secondary  p-3  text-center">
        <span class="mb-4"><i class="fa-solid fa-location-dot mx-2" style="color: rgb(241 96 56);"></i></span>
                
                <h3 class="text-center">Address</h3>
                <p>Mid Baneshwor, Kathmandu, Nepal</p>
    </div>
    <!--section text ended-->

    <div class="icon  text-secondary  p-3 text-center">
        <span class="mb-4"><i class="fa-solid fa-envelope mx-2" style="color: rgb(241 96 56);"></i></span>
        <h3 class="text-center">General Support</h3>
        <p>gasbooking@gmail.com</p>
    </div>


    <div class="icon  text-secondary   p-3 text-center">
        <span class="mb-4"><i class="fa-solid fa-phone mx-2" style="color: rgb(241 96 56);"></i></span>
        <h3 class="text-center">Let's talk</h3>
        <p>021456789,021567893</p>
    </div>

</div>
</div>
 <!--section map started-->
<section class="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=softech foundation&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    
</section>
<!--section map ended-->
@endsection