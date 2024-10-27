@extends('layouts.admin.app')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ asset('admin/assets/img/admin.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Admin
          <!-- <div class="logo-image-big">
            <img src="{{ asset('admin/assets/img/logo-big.png">
          </div> -->
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
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    Wellcome Admin.
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
