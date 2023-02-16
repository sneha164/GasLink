@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main form ">
                <form class="mx-1 mx-md-4" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="d-flex col-lg-6 flex-row align-items-center mb-2 ">
                        <div class="form-outline flex-fill ">
                            <label class="form-label" for="form3Example1c">Name</label>
                            <input type="text" id="form3Example1c" class="form-control" name="name"
                                placeholder="Name" />
                        </div>
                    </div>
                    
                        <div class="col-lg-6 d-flex flex-row align-items-center mb-2 ">
                            <div class="form-outline flex-fill ">
                                <label class="form-label" for="form3Example3c">Category ID</label>

                                <select id="form3Example3c" class="form-control" name="category_id">
                                    <option>-- Select Category --</option>
                                    @foreach ($categories as $cat)
                                        <option
                                            value="{{ $cat->id }}">{{ $cat->title }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2 ">
                                <div class="form-outline flex-fill ">
                                    <label class="form-label" for="form3Example3c">Purchase Price</label>
                                    <input type="text" id="form3Example3c" class="form-control" name="purchase_price"
                                        placeholder=" Purchase Price" />

                                </div>
                            </div>
                            <div class=" col-lg-6 d-flex flex-row align-items-center mb-2">
                                <div class="form-outline flex-fill ">
                                    <label class="form-label" for="form3Example3c">MRP</label>
                                    <input type="text" id="form3Example3c" class="form-control" name="mrp"
                                        placeholder="MRP" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex  col-lg-6 flex-row align-items-center mb-2 ">
                                <div class="form-outline flex-fill ">
                                    <label class="form-label" for="form3Example3c"> Selling Price</label>
                                    <input type="text" id="form3Example3c" class="form-control" name="selling_price"
                                        placeholder=" Selling Price" />
                                </div>
                            </div>

                            <div class=" col-lg-6 d-flex  flex-row align-items-center mb-2 ">
                                <div class="form-outline flex-fill ">
                                    <label class="form-label" for="form3Example3c">Quantity</label>
                                    <input type="text" id="form3Example3c" class="form-control" name="quantity"
                                        placeholder="Quantity" />

                                </div>
                            </div>
                        </div>
                            <div class=" d-flex flex-row align-items-center mb-2 ">
                                <div class="form-outline flex-fill ">
                                    <label class="form-label" for="form3Example3c"> Image</label>
                                    <input type="file" id="form3Example3c" class="form-control" name="images[]" multiple
                                        placeholder="Image" />

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
