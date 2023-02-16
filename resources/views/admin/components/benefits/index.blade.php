@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main create p-3 ">
<div class="d-flex button mb-2">
    <button type="submit" class="btn btn-lg"><a href="{{route('admin.benefit.create')}}">Create New</a></button>
  </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">S.N.</th>
        <th scope="col">Benefits Title</th>
        <th scope="col">Benefits Description</th>
        <th scope="col">Benefits Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->benefits_title}}</td>
            <td>{{$item->benefits_description}} </td>
            <td><img src="{{asset('uploads/benefits/'.$item->benefits_image)}}" alt="{{$item->benefits_image}}" height="100" width="100"></td>
            <td>
                <a href="{{route('admin.benefit.edit', $item->id)}}">Edit</a><br>
                <a href="{{route('admin.benefit.destroy', $item->id)}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
        </main>
    </div>
</div>

@endsection