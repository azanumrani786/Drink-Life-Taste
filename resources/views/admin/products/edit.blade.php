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
                    <h5>Edit Product</h5>
                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label>Name:</label>
                        <input type="text" name="name" value="{{ $product->name }}" required  class="form-control">
                        <label>Description:</label>
                        <textarea name="description" required  class="form-control" style="padding: 0px;">{{ $product->description }}</textarea>
                        <label>Price:</label>
                        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required  class="form-control">
                        <label>Quantity:</label>
                        <input type="number" name="quantity" value="{{ $product->quantity }}" required  class="form-control"> 
                        <label>Image:</label>
                        <input type="file" name="image"  required class="form-control">
                        @if($product->image)
                            <p>Current Image:</p>
                            <img src="{{ asset($product->image) }}" width="100">
                        @endif
                        <button type="submit" class="btn btn-primary btn-sm">Update Product</button>
                    </form>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
