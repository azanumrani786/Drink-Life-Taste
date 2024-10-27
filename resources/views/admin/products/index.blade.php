@extends('layouts.admin.app')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ asset('admin/assets/img/admin.png')}}">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          Admin
        </a>
      </div>
      @include('layouts.admin.sidebar.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('layouts.admin.navbar.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Product List</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Create New Product</a>
                    <table id="productTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Actions</th> <!-- New column for actions -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>${{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset($product->image) }}" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Edit</a>
                                        
                                        <!-- Delete Button -->
                                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
