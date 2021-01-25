@extends('dashboard.master.app')
@section('title')
    YouthFireIT | Dashboard
@endsection

@section('content')
@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong class="text-success">Message: {{  Session::get('success')  }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
    <!-- content @s -->
      <div class="nk-content ">
          <div class="container-fluid">
              <div class="nk-content-inner">
                  <div class="nk-content-body">
                      <div class="components-preview wide-lg">

                          <div class="nk-block nk-block-lg">

                              <div class="row g-gs">
                                  <div class="col-lg-10">
                                      <div class="card card-bordered h-100">
                                          <div class="card-inner m-5">
                                              <div class="card-head bg-light p-3">
                                                  <h5 class="card-title">Add Brand</h5>
                                              </div>
                                              <form action="{{ route('brands.update', $brand->id) }}" method="post">
                                              @method('PUT')
                                              @csrf
                                                  <div class="form-group">
                                                      <label class="form-label" for="full-name">Brand Name:</label>
                                                      <div class="form-control-wrap">
                                                          <input type="text" name="name" class="form-control" id="full-name" value="{{ $brand->name }}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- .nk-block -->

                      </div><!-- .components-preview -->
                  </div>
              </div>
          </div>
      </div>
    <!-- content @e -->
@endsection
