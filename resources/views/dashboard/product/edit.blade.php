@extends('dashboard.master.app')
@section('title')
    YouthFireIT | Dashboard
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="text-success">Message: {{ Session::get('success') }}</strong>
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
                                                <h5 class="card-title">Product Add</h5>
                                            </div>
                                            <form action="{{ route('products.update', $product->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name*</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="full-name" value="{{ $product->name }}">
                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Quantity</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" name="quantity" class="form-control"
                                                            id="full-name" value="{{ $product->quantity }}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="price">Price*</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="price"
                                                            class="form-control @error('price') is-invalid @enderror"
                                                            id="full-name" value="{{ $product->price }}">
                                                        @error('price')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="default-06">Image</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" name="images[]"
                                                                placeholder="address" multiple>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="cat_id">Choose Category*</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select
                                                                class="form-control @error('cat_id') is-invalid @enderror"
                                                                id="default-06" name="cat_id">

                                                                <?php $singleCategory =
                                                                App\Models\Category::find($product->cat_id); ?>

                                                                <option value="{{ $singleCategory->id }}">
                                                                    {{ $singleCategory->name }}</option>

                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            @error('cat_id')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="brand_id">Select Brand*</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select
                                                                class="form-control @error('brand_id') is-invalid @enderror"
                                                                id="default-06" name="brand_id">

                                                                <?php $singleBrand =
                                                                App\Models\Brand::find($product->brand_id); ?>

                                                                <option value="{{ $singleBrand->id }}">
                                                                    {{ $singleBrand->name }}</option>

                                                                @foreach ($brands as $brand)
                                                                    <option value="{{ $brand->id }}">{{ $brand->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('brand_id')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Description</label>
                                                    <div class="form-control-wrap">
                                                        <textarea type="text" class="summernote-basic" id="full-name"
                                                            name="desc" value="{{ $product->description }}"></textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Save
                                                        Informations</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
@section('scripts')
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/editors/summernote.css?ver=1.9.2">
    <script src="{{ asset('/') }}assets/js/libs/editors/summernote.js?ver=1.9.2"></script>
    <script src="{{ asset('/') }}assets/js/editors.js?ver=1.9.2"></script>
@endsection
