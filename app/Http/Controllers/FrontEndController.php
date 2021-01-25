<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   private $path = 'frontend';


    //Return Home Page
    public function index(){ 
        $products = Product::paginate(15); 
        $categories = Category::all();
        $count = Product::all();
        $count = count($count);
        return view($this->path.'.'.'index',compact('products','count','categories'));

    }

    // Get Single Product 
    public function singleProduct($slug){
       
        $product = Product::where('slug',$slug)->first();
        // return $product;
        return view($this->path.'.'.'single-product',compact('product'));

    }

    //Product By Category with ajax
    public function productByCategory(Request $request){
        $products = Product::where('cat_id',$request->id)->paginate(15); 
        $categories = Category::all();
        $count = Product::all();
        $count = count($count);
        return view($this->path.'.'.'product-by-category-ajax',compact('products','count','categories'));
    }
}
