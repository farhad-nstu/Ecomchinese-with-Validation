<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $categories = Category::paginate( 10 );
        return view( 'dashboard.category.index', compact( 'categories' ) );
    }

    public function create() {
        return view( 'dashboard.category.add' );
    }

    public function store( Request $request ) {
        $this->validate( $request, array(
            'name' => 'string|required|max:255'
        ) );

        $category = new Category;

        $category->name = $request->name;
        $category->save();
        return back()->with( 'success', 'Category created Successfuly' );
    }

    public function edit( Category $category ) {
        return view( 'dashboard.category.edit', compact( 'category' ) );
    }

    public function update( Request $request, Category $category ) {
        $this->validate( $request, array(
            'ename' => 'string|required|max:255'
        ) );

        $category->name = $request->ename;
        $category->update();
        return redirect()->route( 'categories.index' )->with( 'success', 'Category updated successfully' );
    }

    public function destroy( Category $category ) {
        $products = Product::where( 'cat_id', $category->id )->get();
        foreach ( $products as $product ) {
            $product->delete();
        }
        $category->delete();
        return redirect()->back()->with( 'success', 'Category deleted successfully' );
    }
}
