@extends('layouts.app')

@section('content')

    <style>
        .pagination{
            justify-content: center;
            margin: 50px;
        }
    </style>

    <div class="container">
        <div class=" row" style="justify-content: center;">
            @if($products)
                @foreach($products as $product)
                    <div class="card text-center col-3" style="margin:5px;">
                        <div class="card-block">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <img style="width: 50%" src="{{$product->image}}" alt="">
                            <p class="card-text">
                                {{$product->description}}
                            </p>
                            <div>{{$product->price}}$</div>
                            <label for="">Count</label> <br>
                            <input type="number" class="count-product" style="outline: none;border: 1px solid; border-radius: 20px; padding-left:20px;" value="1">
                        </div>
                        <div class="card-footer">
                            @auth
                                <a href="javascript:;" class="add-bascet" @if(count($product->basket)) style="color: #00e500;" @endif data-id="{{$product->id}}"><i class="fas fa-shopping-basket"></i></a>
                            @endauth
                            @guest
                                <a href="{{route('register')}}"><i class="fas fa-shopping-basket"></i></a>
                            @endguest
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div>
            {{$products->links("pagination::bootstrap-4")}}
        </div>
    </div>

@endsection
