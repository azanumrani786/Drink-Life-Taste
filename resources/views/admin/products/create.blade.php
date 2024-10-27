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
                    <h5>Create Product</h5>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label>Name:</label>
                        <input type="text" name="name" required class="form-control">
                        <label>Description:</label>
                        <textarea name="description" required class="form-control" style="padding: 0px;"></textarea>
                        <label>Price:</label>
                        <input type="number" step="0.01" name="price" required class="form-control">
                        <label>Quantity:</label>
                        <input type="number" name="quantity" required class="form-control">
                        <label>Image:</label>
                        <input type="file" name="image" required class="form-control">
                        <button type="submit" class="btn btn-primary btn-sm">Create Product</button>
                    </form>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
