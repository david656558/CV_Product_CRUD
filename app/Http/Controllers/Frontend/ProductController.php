<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Product;

class ProductController
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->where('end_date', '>', time())->where('start_date', '<', time())->paginate(2);
        return view('Frontend.product', compact('products'));
    }


}
