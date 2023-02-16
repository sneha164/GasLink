@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main create p-3 ">
<div class="d-flex button mb-2">
    <button type="submit" class="btn btn-lg"><a href="{{route('admin.product.create')}}">Create New</a></button>
  </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">S.N.</th>
        <th scope="col">Name</th>
        <th scope="col">Category ID</th>
        <th scope="col">Purchase Price</th>
        <th scope="col">MRP</th>
        <th scope="col">Selling Price</th>
        <th scope="col">Quantity</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->category_id}} </td>
            <td>{{$item->purchase_price}} </td>
            <td>{{$item->mrp}} </td>
            <td>{{$item->selling_price}} </td>
            <td>{{$item->quantity}} </td>
            <td>
                <a href="{{route('admin.product.edit', $item->id)}}">Edit</a><br>
                <a href="{{route('admin.product.destroy', $item->id)}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
        </main>
    </div>
</div>

@endsection