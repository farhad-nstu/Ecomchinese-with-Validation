@extends('dashboard.master.app')
@section('title')
YouthFireIT | Dashboard
@endsection

@section('content')
@if (Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong class="text-success">Message: {{  Session::get('message')  }}</strong>
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
                      <h5 class="card-title">Add Sub Category</h5>
                    </div>
                    <form action="{{ route('subcategories.store') }}" method="post">
                      @csrf

                      <div class="form-group">
                        <label class="form-label" for="cat_id">Choose Category*</label>
                        <div class="form-control-wrap ">
                          <div class="form-control-select">
                            <select class="form-control @error('cat_id') is-invalid @enderror" id="default-06"
                              name="cat_id" required>

                              <option value="default">choose category</option>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}">
                                {{ $category->name }}</option>
                              @endforeach
                            </select>
                            @error('cat_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="form-label" for="full-name">Sub Category Name:</label>
                        <div class="form-control-wrap">
                          <input type="text" name="name" class="form-control" id="full-name">
                        </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
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