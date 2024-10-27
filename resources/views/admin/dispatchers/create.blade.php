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
                <h5>Add New Distributor</h5>
                <form action="{{ route('dispatchers.store') }}" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required class="form-control">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required class="form-control">

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required class="form-control">

                    <button type="submit" class="btn btn-sm btn-primary">Create Dispatcher</button>
                </form>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection