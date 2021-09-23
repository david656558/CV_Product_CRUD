<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function index(){
        $baskets = Basket::with('product', 'user')->where('user_id', auth()->id())->get();
        if (count($baskets)){
            foreach ($baskets as $total){
                $price = $total->product->price;
                $count = $total->count;
                $all[] = $price * $count;
            }
            $tot= array_sum($all);
        }else{
            $tot = 0;
        }
        return view('Frontend/basket', compact('baskets', 'tot'));
    }


    public function create(Request $request){
//        dd($request->all());
        $basket = new Basket();
        $basket->user_id = Auth()->user()->id;
        $basket->product_id = $request->id;
        $basket->count = $request->count;
        $basket->save();
        return response()->json($basket, 200);
    }

    public function update(Request $request){
//        dd($request->all());
        $basket = Basket::find($request->id);
        $basket->count = $request->count;
        $basket->save();
        return response()->json($basket, 200);
    }

    public function delete($id){
        $basket = Basket::find($id);
        $basket->delete();
        return response()->json('ok', 200);
    }

    public function total(){
        $baskets = Basket::with('product', 'user')->where('user_id', auth()->id())->get();
        if (count($baskets)) {
            foreach ($baskets as $total) {
                $price = $total->product->price;
                $count = $total->count;
                $all[] = $price * $count;
            }
            $tot = array_sum($all);
        }else{
            $tot = 0;
        }
        return response()->json($tot, 200);
    }

}
