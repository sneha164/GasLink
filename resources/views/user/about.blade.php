@extends('user.layouts.app')
@section('content')
  <!--section breadcrumb start-->
  <section class="breadcrumbs">
    

    <div class="d-flex text bg-light mt-5 p-5 justify-content-between align-items-center">
        <h2>About</h2>
        <ul>
            <li class="mx-2"><a href="index.html">Home</a></li>
            <li class="mx-2">About</li>
        </ul>
    </div>


</section>
<!--section breadcrumb end-->

    <!--section about starts-->
   <section class="about" id="tab-about">
    <div class="container p-5 pb-0 " >
        <div class="row">
        
            <div class="text col-lg-6 col-md-6 col-sm-12">
                <h1 class="text-center">Gas <span> Link</span></h1>
                
                    <p style="text-align:justify">
                        <span>
                            LPG or Liquefied Petroleum Gas is the most widely used cooking gas. The government of Nepal also subsidizes the cost of a fixed number of cylinders every year, making it affordable for households to use LPG for their fuel needs.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span>There is no doubt that there are some distinct advantages that you can take advantage of if you switch to LPG at home.</span>
                    </p>
                    <p style="text-align:justify">
                        <span>The advantages such that some states in the country have gone on a drive to ensure that every household in the state has access to LPG and are arming themselves with grants from the state and central government to help with this transition. Some states are identifying houses where there is no LPG and offering them connections, stoves and the first cylinder for free. We even keep hearing about how the government has announced various subsidies for specific income groups, on each cylinder of LPG that they buy.</span>
                    </p>
                    <p style="text-align:justify">
                        <span>So now the question really becomes, What is so great about LPG? The answer is that not only is the fuel cheaper and cleaner than things like kerosene and wood, it is also usable as fuel for cooking and fuel for vehicles. It also comes with the advantage of easy storage and more efficient combustion. However these are not the only advantages to using LPG.</span>
                    </p>
            </div>  
            <div class="image col-lg-6 col-md-6 col-sm-12">
                <img src="{{asset('user/images/about.png')}}" width="100%" height="500px">
        
        </div>
        </div>
        </div>
    </div>

</section>
<!--section banner end-->
@endsection