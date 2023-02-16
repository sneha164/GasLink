@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main create p-3 ">
                <div class="d-flex button mb-2">
                    <button type="submit" class="btn btn-lg"><a href="{{ route('admin.product_category.create') }}">Create
                            New</a></button>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }} </td>
                                <td><img src="{{ asset('uploads/productcategory/' . $item->image) }}"
                                        alt="{{ $item->image}}"  height="100" width="100"></td>
                                <td>
                                    <a href="{{ route('admin.product_category.edit', $item->id) }}">Edit</a><br>
                                    <a href="{{ route('admin.product_category.destroy', $item->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>
@endsection
