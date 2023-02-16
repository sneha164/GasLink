
@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main create p-3 ">
<div class="d-flex button mb-2">
    <button type="submit" class="btn btn-lg"><a href="{{route('admin.companysetting.edit')}}">Create New</a></button>
  </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">S.N.</th>
        <th scope="col">Company Name</th>
        <th scope="col">Company Title</th>
        <th scope="col">Company Description</th>
        <th scope="col">About Title</th>
        <th scope="col">About Description</th>
        <th scope="col">About Image</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Phone Number Alt</th>
        <th scope="col">Contact Email</th>
        <th scope="col">Contact Email Alt</th>
        <th scope="col">Address One</th>
        <th scope="col">Address Two</th>
        <th scope="col">Map</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>
                <a href="{{route('admin.companysetting.edit', $item->id)}}">Edit</a><br>
                <a href="{{route('admin.companysetting.destroy')}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
        </main>
    </div>
</div>

@endsection
@endsection
