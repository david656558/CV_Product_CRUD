<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->where('end_date', '>', time())->where('start_date', '<', time())->orWhere('start_date', '=', 0 )->where('status', 1)->with(['basket'=>function($q){
            $q->where('user_id', Auth()->id());
        }])->paginate(6);


        return view('Frontend.product', compact('products'));
    }


}
