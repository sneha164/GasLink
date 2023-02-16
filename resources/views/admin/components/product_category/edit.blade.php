@extends('admin.layouts.app')
@push('js')
    <script src="https://cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description')
    </script>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main form ">
                <form class="mx-1 mx-md-4" method="POST" action="{{ route('admin.product_category.update') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="d-flex col-lg-6 flex-row align-items-center mb-2">
                            <div class="form-outline flex-fill ">
                                <label class="form-label" for="form3Example3c">Image</label>
                                <input type="file" id="form3Example3c" class="form-control" name="image"
                                    placeholder="Image" />
                                    
                            </div>
                        </div>

                        <div class="d-flex col-lg-6 flex-row align-items-center mb-2 ">
                            <div class="form-outline flex-fill ">
                                <label class="form-label" for="form3Example1c"> Title</label>
                                <input type="text" id="form3Example1c" class="form-control" name="title"
                                    placeholder="Title" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-2">
                        <div class="form-outline flex-fill ">
                            <label class="form-label" for="form3Example3c"> Description</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="4"
                                placeholder=" Description"></textarea>
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
