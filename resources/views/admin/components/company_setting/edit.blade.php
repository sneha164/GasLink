@extends('admin.layouts.app')
@push('js')
<script src="https://cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
<script>
   CKEDITOR.replace('company_description')
   CKEDITOR.replace('about_description')
</script>
@endpush
@section('content')
<div class="container-fluid">
  <div class="row">
      <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main form ">
                  <form class="mx-1 mx-md-4" method="POST" action="{{route('admin.companySetting.update', $setting->id)}}" enctype="multipart/form-data"> 
                @csrf
                <div class="row">
                    <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2 ">                
                           <div class="form-outline flex-fill ">
                            <label class="form-label" for="form3Example1c"> Company Name</label>
                        <input type="text" id="form3Example1c" class="form-control" name="company_name" value="{{$setting->company_name}}" placeholder="Company Name" />
                      </div>
                    </div>
  
                    <div class="col-lg-6 d-flex flex-row align-items-center mb-2 ">
                      <div class="form-outline flex-fill ">
                        <label class="form-label" for="form3Example3c">Company Title</label>
                        <input type="text" id="form3Example3c" class="form-control" name="company_title" value="{{$setting->company_title}}" placeholder="Company Title" />
                        
                      </div>
                    </div>
                </div>
                
                
                    <div class="d-flex flex-row align-items-center mb-2">
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">Company Description</label>
                            <textarea name="company_description" class="form-control" id="company_description" cols="30" rows="4" placeholder="Company Description">{{$setting->company_description}}</textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2 "> 
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">About Title</label>
                          <input type="text" id="form3Example3c" class="form-control" name="about_title" value="{{$setting->about_title}}" placeholder="About Title" />
                          
                        </div>
                      </div>
                      <div class=" col-lg-6 d-flex flex-row align-items-center mb-2">
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">About Image</label>
                          <input type="file" id="form3Example3c" class="form-control" name="about_image" value="{{$setting->about_image}}" placeholder="About Image" />
                        </div>
                      </div>
                    </div>
                      <div class="d-flex flex-row align-items-center mb-2 ">
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c"> About Description</label>
                            <textarea name="about_description" class="form-control" id="message" cols="30" rows="4" placeholder="About Description"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2 "> 
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">Phone Number</label>
                          <input type="text" id="form3Example3c" class="form-control" name="phone_number" value="{{$setting->phone_number}}" placeholder="Phone Number" />
                          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex flex-row align-items-center mb-2">
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">Phone Number Alt</label>
                          <input type="text" id="form3Example3c" class="form-control" name="phone_number_alt" value="{{$setting->phone_number_alt}}" placeholder="Phone Number Alt" />
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2"> 
                      
                        <div class="form-outline flex-fill">
                          <label class="form-label" for="form3Example3c">contact Email</label>
                          <input type="text" id="form3Example3c" class="form-control" name="contact_email" value="{{$setting->contact_email}}" placeholder="Contact Email" />
                          
                        </div>
                      </div>
                      <div class=" col-lg-6 d-flex flex-row align-items-center mb-2 ">
                        <div class="form-outline flex-fill">
                          <label class="form-label" for="form3Example3c">Contact Email Alt</label>
                          <input type="text" id="form3Example3c" class="form-control" name="contact_email_alt" value="{{$setting->contact_email_alt}}" placeholder="Contact Email Alt" />
                        
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2"> 
                     
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">Address One</label>
                          <input type="text" id="form3Example3c" class="form-control" name="address_1" value="{{$setting->address_1}}" placeholder="Address one" />
                    
                        </div>
                      </div>
                      <div class=" col-lg-6 d-flex flex-row align-items-center mb-2 ">
                        <div class="form-outline flex-fill ">
                          <label class="form-label" for="form3Example3c">Address Two</label>
                          <input type="text" id="form3Example3c" class="form-control" name="address_2" value="{{$setting->address_2}}" placeholder="Address Two" />
                          
                        </div>
                      </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-2">
                        <div class="form-outline flex-fill">
                          <label class="form-label" for="form3Example3c"> Map</label>
                          <input type="text" id="form3Example3c" class="form-control map" name="map" value="{{$setting->map}}" placeholder="Map" />
                          
                        </div>
                      </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mt-3 mb-lg-4">
                      <button type="submit" class="btn  btn-lg">Submit</button>
                    </div>
  
                  </form>
                  </main>
  </div>
</div>

    
    
@endsection
