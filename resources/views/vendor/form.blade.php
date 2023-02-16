@extends('layouts.app')

@section('content')
<section class="form ">
    <img src="images/Logo.png" width="15%" height="100%">
    <form enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group col-lg-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone">
            </div>
            <div class="form-group col-lg-6">
                <label for="pan_no">PAN no:</label>
                <input
                    type="number"
                    class="form-control"
                    id="pan_no"
                >
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="citizenship">Citizenship Image:</label>
                <input
                    type="file"
                    class="form-control-file"
                    id="citizenship"
                    accept="image/*"
                    onchange="encryptImage(event)"
                >
            </div>
            <div class="form-group col-lg-6">
                <label for="image">Image:</label>
                <input
                    type="file"
                    class="form-control-file"
                    id="image"
                    accept="image/*"
                    onchange="encryptImage(event)"
                >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group col-lg-6">
                <label for="work">Work Experience:</label>
                <textarea class="form-control" id="work" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection