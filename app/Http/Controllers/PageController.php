<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
 
class PageController extends Controller
{


		/**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function discount()
    {

    		$products = Product::where('has_discount', 1)->get();

        return view('welcome', [
            'products' => $products
        ]);
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function category($id)
    {

    		$products = Category::find($id)->products()->get();

        return view('welcome', [
            'products' => $products
        ]);
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function product($id)
    {
    		$product = Product::where('id', $id)->first();

        return view('product', [
            'product' => $product
        ]);
    }
}