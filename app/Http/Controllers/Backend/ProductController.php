<?php

namespace App\Http\Controllers\Backend;

use App\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
//        dd($request->all());
//        dd(strtotime(1970-01-01) );
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->start_date = strtotime($request->start_date) == strtotime(1970-01-01) ?  0 : strtotime($request->start_date) ;
        $product->end_date = strtotime($request->end_date) == strtotime(1970-01-01) ?  0 : strtotime($request->end_date);
        $product->status = $request->status ? $request->status : 1;
        $path = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR);
        $imgName = FileHelper::upload($request->file , $path);
        if(!$imgName) return response()->json(['message' => 'Something went wrong'],400);
        $image_path = "/storage/product/" .$imgName;
        $product->image = $image_path;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.dashboard.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->start_date = strtotime($request->start_date);
        $product->end_date = strtotime($request->end_date);
        $product->status = $request->status  ? $request->status : 1;

        if($request->file){
            $categoryImage = str_replace('/storage', '', $product->image);
            Storage::delete('/public' . $categoryImage);
            $path = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR);
            $imgName = FileHelper::upload($request->file ,$path);
            if(!$imgName) return response()->json(['message' => 'Something went wrong'],400);
            $image_path = "/storage/product/" .$imgName;
            $product->image = $image_path;
        }
        $product->save();
        return redirect()->route('product.index')->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delimg = Product::find($id);
        $categoryImage = str_replace('/storage', '', $delimg->image);
        Storage::delete('/public' . $categoryImage);
        $delimg->delete();

        return redirect()->route('product.index')->with('message', 'Success');
    }
}
