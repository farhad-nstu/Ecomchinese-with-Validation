@forelse ($products as $product)
    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
    <div class="ps-product">
        <div class="ps-product__thumbnail">
        <a href="{{route('frontend.single',$product->slug)}}">
            @php
            $images = App\Models\Image::where('product_id', $product->id)->get();
            @endphp 
        <img src="{{ $images[0]->image? $images[0]->image : ''}}" alt="{{$product->name}}">
        </a>
            
        </div>
        <div class="ps-product__container">
        <div class="ps-product__content"><a class="ps-product__title" href="{{route('frontend.single',$product->slug)}}">{{$product->name}}</a>
                <p class="ps-product__price"></p>
            </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="{{route('frontend.single',$product->slug)}}">{{$product->name}}</a>
                <p class="ps-product__price"></p>
            </div>
        </div>
    </div>
    </div> 
    @empty
    <h2 class="text-center text-gender">There is no product</h2>
    @endforelse

    