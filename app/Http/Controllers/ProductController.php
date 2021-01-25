<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\Image;
use Intervention\Image\ImageManagerStatic as Images;

class ProductController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::paginate( 10 );
        return view( 'dashboard.product.index', compact( 'categories', 'brands', 'products', ) );
    }

    public function create() {
        $categories = Category::all();
        $brands = Brand::all();
        return view( 'dashboard.product.add', compact( 'categories', 'brands' ) );
    }

    public function store( Request $request ) {
        $request->validate( [
            'name'      => 'string|required|unique:products,slug|max:200',
            'cat_id'    => 'numeric|required',
            'brand_id'  => 'numeric|required',
            'price'     => 'numeric|required',
        ], [
            'name.required' => 'Name is required',
            'cat_id.required' => 'Category is required',
            'brand_id.required' => 'Brand is required',
            'price.required'    => 'Price is required',
        ] );

        $product = new Product;
        $product->cat_id = $request->cat_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = Str::slug( $request->name );
        $product->price = $request->price;
        $product->description = $request->desc;
        $product->quantity = $request->quantity;
        $product->save();

        $images = $request->file( 'images' );
        foreach ( $images as $image ) {

            $filename    = $image->getClientOriginalName();

            $image_resize = Images::make( $image->getRealPath() );

            $image_resize->resize( 800, 800 );
            $image_resize->save( public_path( 'images/' .$filename ) );
            $imageToSave = new Image;
            $imageToSave->product_id = $product->id;
            $imageToSave->image_type = 'product';

            $imageToSave->image = 'images/' .$filename;
            $imageToSave->save();
        }

        return redirect()->route( 'products.index' )->with( 'success', 'Product added successfully' );
    }

    public function edit( Product $product ) {
        $categories = Category::all();
        $brands = Brand::all();
        return view( 'dashboard.product.edit', compact( 'product', 'categories', 'brands' ) );
    }

    public function update( Request $request, Product $product ) {
        $request->validate( [
            'name'      => 'string|required|unique:products,slug|max:200',
            'cat_id'    => 'numeric|required',
            'brand_id'  => 'numeric|required',
            'price'     => 'numeric|required',
        ], [
            'name.required' => 'Name is required',
            'cat_id.required' => 'Category is required',
            'brand_id.required' => 'Brand is required',
            'price.required'    => 'Price is required',
        ] );

        $product->cat_id = $request->cat_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = Str::slug( $request->name );
        $product->price = $request->price;
        $product->description = $request->desc;
        $product->quantity = $request->quantity;
        $product->update();

        if ( $request->file( 'images' ) ) {
            $images = $request->file( 'images' );
            foreach ( $images as $image ) {

                $filename = $image->getClientOriginalName();

                $image_resize = Images::make( $image->getRealPath() );

                $image_resize->resize( 800, 800 );
                $image_resize->save( public_path( 'images/' .$filename ) );
                $imageToSave = new Image;
                $imageToSave->product_id = $product->id;

                $imageToSave->image = 'images/' .$filename;
                $imageToSave->save();
            }
        }

        return redirect()->route( 'products.index' )->with( 'success', 'Product updated successfully' );
    }

    public function destroy( Product $product ) {
        $images = Image::where( 'product_id', $product->id )->get();
        foreach ( $images as $image ) {
            $image->delete();
        }
        $product->delete();
        return redirect()->back()->with( 'success', 'Product deleted successfully' );
    }
}
