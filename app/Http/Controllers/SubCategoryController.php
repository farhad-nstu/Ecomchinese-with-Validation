<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class SubCategoryController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $subcategories = SubCategory::paginate( 10 );
        $categories = Category::all();
        return view( 'dashboard.subcategory.index', compact( 'subcategories', 'categories' ) );
    }

    public function create() {
        $categories = Category::all();
        return view( 'dashboard.subcategory.add', compact( 'categories' ) );
    }

    public function store( Request $request ) {
        $this->validate( $request, array(
            'name' => 'string|required|max:255'
        ) );

        $subcategory = new SubCategory;
        $subcategory->category_id = $request->cat_id;
        $subcategory->name = $request->name;
        $subcategory->save();

        Session::flash( 'success', 'New sub category has been created successfully' );
        return redirect()->route( 'subcategories.index' );
    }

    public function edit( SubCategory $subCategory ) {
        //
    }

    public function update( Request $request, SubCategory $subCategory ) {
        //
    }

    public function destroy( SubCategory $subCategory ) {
        //
    }
}
