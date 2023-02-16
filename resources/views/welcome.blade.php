 @extends('user.layouts.app')
 @section('content')
     <!--section background starts-->
     <section class="background">
         <div data-aos="fade-up">
             <div class=" p-5 text ">
                 <h1>Order your gas in <span class="type"> </span> </h1>
                 <ul class="mt-3">
                     <li>
                         <i class="fa-solid fa-clock mx-1"></i>

                         <h4>24/7</h4>
                     </li>
                     <li> <i class="fa-solid fa-mobile-button mx-2"></i>

                         <h4>Easy</h4>
                     </li>
                     <li> <i class="fa-solid fa-thumbs-up mx-5"></i>

                         <h4> Convenient</h4>
                     </li>
                 </ul>
                 <div class="bottom mt-4">
                     <a class="nav-link" href="#"> Book Now</a>
                 </div>
             </div>
         </div>
     </section>

     <!--section background ends-->
     <!--section banner starts-->
     <section class="banner " id="tab-about">
         <div class="container p-5 pb-0 ">
             <div class="row">

                 <div class=" text col-lg-4 col-md-6 col-sm-12">
                     <div data-aos="fade-up">
                         <h1 class="text-center">About <span> Us</span></h1>
                     </div>
                     <div data-aos="fade-up">
                         {!! $about->about_description !!}
                         <div class="bottom ">
                             <a class="nav-link" href="{{ asset('user.about') }}"> View More</a>
                         </div>
                     </div>
                 </div>

                 <div class="image col-lg-8 col-md-6 col-sm-12">
                     <div data-aos="fade-left">
                         <img src="{{ asset('uploads/comapnysetting/' . $about->about_image) }}">
                     </div>
                 </div>

             </div>
         </div>

     </section>
     <!--section banner end-->
     <!--section benefits start-->
     <section class="benefits " id="tab-benefits">
         <div data-aos="fade-up">
             <h1 class="text-center">Our <span> Benefits</span></h1>
         </div>
         <div class="container p-5 pb-0">
             <div class="row">
                 <div data-aos="fade-up">
                     <div class="owl-carousel">

                         @foreach ($benefits as $bf)
                             <div class="card p-4 mt-3">
                                 <div class=" card-img-top ">
                                     <img src="{{ asset('uploads/benefits/' . $bf->benefits_image) }}" width="90%">
                                 </div>
                                 <div class="card-body text-center">
                                     <h5 class="card-title ">{{ $bf->benefits_title }}</h5>

                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>

             </div>
         </div>
     </section>
     <!--section benefits end-->
     <!--choose section start-->

     <section class="choose" id="tab-choose">
         <div class="tittle">
             <div data-aos="fade-up">
                 <h1 class="text-center">Why <span> Choose Us</span></h1>
             </div>
         </div>
         <div class="container choices ">
             @foreach ($choose as $item)
                 @if ($loop->iteration == 1)
                     <div class="left-top">
                         <div class="left-top-circle">
                             <img src="{{ asset('uploads/choose/' . $item->choose_image) }}" height="90px">
                         </div>

                         <div class="left-top-text">
                             <h4 class="text-center">{!! $item->choose_title !!}</h4>
                             {!! $item->choose_description !!}
                         </div>
                     </div>
                 @elseif($loop->iteration == 2)
                     <div class="right-top">
                         <div class="right-top-circle">
                             <img src="{{ asset('uploads/choose/' . $item->choose_image) }}" height="90px">
                         </div>

                         <div class="right-top-text">
                             <h4 class="text-center">{!! $item->choose_title !!}</h4>
                             {!! $item->choose_description !!}
                         </div>
                     </div>
                 @elseif($loop->iteration == 3)
                     <div class="right-bottom">
                         <div class="right-bottom-circle">
                             <img src="{{ asset('uploads/choose/' . $item->choose_image) }}" height="90px">
                         </div>

                         <div class="right-bottom-text">
                             <h4 class="text-center">{!! $item->choose_title !!}</h4>
                             {!! $item->choose_description !!}
                         </div>
                     </div>
                 @else
                     <div class="left-bottom">
                         <div class="left-bottom-circle">
                             <img src="{{ asset('uploads/choose/' . $item->choose_image) }}" height="90px">
                         </div>

                         <div class="left-bottom-text">
                             <h4 class="text-center">{!! $item->choose_title !!}</h4>
                             {!! $item->choose_description !!}

                         </div>
                     </div>
                 @endif
             @endforeach
         </div>

     </section>

     <!--choose section end-->
     <!-- product section start-->
     <section class="products">
         <div class="container-fluid container-custom margin_30">
             <div data-aos="fade-up">
                 <h1 class="text-center">
                     Our
                     <span>Products</span>
                 </h1>
             </div>
             <div class="container">
                 <div class="row mt-3">
                     <div data-aos="fade-up">
                         <div class="owl-carousel">
                             @foreach ($product as $item)
                                 <div class="card mb-4">
                                     <?php
                                     $image = \App\Models\Images::where('product_id', $item->id)->first();
                                     ?>
                                     <img src="{{ asset('uploads/products/' . $image->url) }}" height="200px"
                                         class="card-img-top">
                                     <div class="card-body text-center bg-light">
                                         <h3 class="card-title ">{{ $item->name }}</h3>
                                         <h6>RS:{{ $item->selling_price }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
                 <div data-aos="fade-left">
                     <div class="bottom mb-4">
                         <a class="nav-link" href="product.html"> View More</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--Specialities section end-->
     <section class="technician">
         <div class="technician-bg">
             <div class="container-fluid">
                 <h1 class="text-center p-3">Technicians</h1>
                 <div class="row text-center  p-2 d-flex align-items-stretch">
                     <div class=" col-lg-3 col-md-4 mb-md-0 d-flex align-items-stretch">
                         <div class="card technician-card">
                             <div class="card-up"></div>
                             <div class="avatar mx-auto ">
                                 <img src="{{ asset('user/images/spongebob.png') }}" class="rounded-circle img-fluid">
                             </div>
                             <div class="card-body">
                                 <h4>Maria Smantha</h4>
                                 <ul class="list-unstyled d-flex justify-content-center mb-0">
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                     </li>
                                 </ul>
                                 <hr>
                                 <p class="dark-grey-text mt-4">
                                     <i class="fas fa-quote-left pe-2"></i>
                                     Lorem ipsum dolor sit amet eos adipisci,
                                     consectetur adipisicing elit.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class=" col-lg-3 col-md-4 mb-md-0 d-flex align-items-stretch">
                         <div class="card technician-card">
                             <div class="card-up"></div>
                             <div class="avatar mx-auto ">
                                 <img src="{{ asset('user/images/minion.png') }}" class="rounded-circle img-fluid">
                             </div>
                             <div class="card-body">
                                 <h4>Lisa Cudrow</h4>
                                 <ul class="list-unstyled d-flex justify-content-center mb-0">
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                     </li>
                                 </ul>
                                 <hr>
                                 <p class="dark-grey-text mt-4">
                                     <i class="fas fa-quote-left pe-2"></i>
                                     Neque cupiditate assumenda in maiores
                                     repudi mollitia architecto.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class=" col-lg-3 col-md-4 mb-0 d-flex align-items-stretch">
                         <div class="card technician-card">
                             <div class="card-up"></div>
                             <div class="avatar mx-auto">
                                 <img src="{{ asset('user/images/panda.png') }}" class="rounded-circle img-fluid">
                             </div>
                             <div class="card-body">
                                 <h4>John Smith</h4>
                                 <ul class="list-unstyled d-flex justify-content-center mb-0">
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                     </li>
                                 </ul>
                                 <hr>
                                 <p class="dark-grey-text mt-4">
                                     <i class="fas fa-quote-left pe-2"></i>
                                     Delectus impedit saepe officiis ab
                                     aliquam repellat rem unde ducimus.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class=" col-lg-3 col-md-4 mb-0 d-flex align-items-stretch">
                         <div class="card technician-card">
                             <div class="card-up"></div>
                             <div class="avatar mx-auto ">
                                 <img src="{{ asset('user/images/tom.jfif') }}" class="rounded-circle img-fluid">
                             </div>
                             <div class="card-body">
                                 <h4>John Smith</h4>
                                 <ul class="list-unstyled d-flex justify-content-center mb-0">
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                     <li>
                                         <i class="fas fa-star fa-sm text-warning"></i>
                                     </li>
                                 </ul>
                                 <hr>
                                 <p class="dark-grey-text mt-4">
                                     <i class="fas fa-quote-left pe-2"></i>
                                     Delectus impedit saepe officiis ab
                                     aliquam repellat rem unde ducimus.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--section technician ends-->
 @endsection
