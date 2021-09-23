@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="total-all">Total: {{$tot}}$</div>
        <div class="card-deck row">
{{--            {{dd($baskets)}}--}}
            @if($baskets)
                @foreach($baskets as $basket)
                    <div class="card text-center col-3">
                        <a class="del-basket" data-id="{{$basket->id}}" style="color:white; cursor: pointer;background: red; "><i class="fas fa-trash"></i></a>
                        <div class="card-block">
                            <h4 class="card-title">{{$basket->product->name}}</h4>
                            <img style="width: 50%" src="{{$basket->product->image}}" alt="">
                            <p class="card-text">
                                {{$basket->product->description}}
                            </p>
                            <div> {{$basket->product->price}}$</div>
                            <label for="">Count</label> <br>
                            <input type="number" data-id="{{$basket->id}}" class="count-product" style="outline: none;border: 1px solid; border-radius: 20px; padding-left:20px;" value="{{$basket->count}}" >
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
