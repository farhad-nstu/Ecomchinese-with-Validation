<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Product;

class BrandController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $brands = Brand::paginate( 10 );
        return view( 'dashboard.brand.index', compact( 'brands' ) );
    }

    public function create() {
        return view( 'dashboard.brand.add' );
    }

    public function store( Request $request ) {
        $this->validate( $request, array(
            'name' => 'string|required|max:255'
        ) );

        $brand = new Brand;
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route( 'brands.index' )->with( 'success', 'New Brand created successfully' );

    }

    public function edit( Brand $brand ) {
        return view( 'dashboard.brand.edit', compact( 'brand' ) );
    }

    public function update( Request $request, Brand $brand ) {
        $this->validate( $request, array(
            'name' => 'string|required|max:255'
        ) );

        $brand->name = $request->name;
        $brand->update();
        return redirect()->route( 'brands.index' )->with( 'success', 'Brand updated successfully' );
    }

    public function destroy( Brand $brand ) {
        $products = Product::where( 'brand_id', $brand->id )->get();
        foreach ( $products as $product ) {
            $product->delete();
        }
        $brand->delete();
        return redirect()->back()->with( 'success', 'Brand deleted successfully' );
    }
}
