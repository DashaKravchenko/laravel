<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;  
use \App\Product;
use \App\Review;

class MainController extends Controller
{
    //main page
    public function index(){
        // $title = 'Main Page';
        // $subtitle = '<em>My First laravel project</em>';
        // $users = ['Dasha', 'Misha', '4'];


        // $category = Category::find(1);
        // $products = $category->products;
        // dd($products->count() );

// $product = Product::find(1);
// dd($product->category->name);


        $categories = Category::with('products')->get();
        $reviews = Review::all();
        $products = Product::with('category')->where('recommended', '=', 1)->get();
        return view('main.index', compact('categories', 'products', 'reviews'));

    }

public function category(string $slug){

    $category = Category::firstWhere('slug', $slug);
    $products = Product::where('category_id', $category->id)->paginate(8);
    return view('shop.category', compact('category', 'products'));
}



public function product(string $slug){
    $reviews = Review::all();
    $product =  Product::firstWhere('slug', $slug);
    return view('shop.product', compact( 'product', 'reviews'));
}

public function getReview(Request $request){
    $review = new Review();
    $review->review = $request->comment;
    $review->user_id = $request->user;
    $review->product_id = $request->product;
    $review->save();
return back();
}









}
