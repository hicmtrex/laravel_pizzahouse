@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order or {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="toppings">Extra toppings</p>
    <ul>
        @foreach ($pizza->toppings as $topping )
        <li>{{$topping}}</li>
        @endforeach

    </ul>
    <form action="{{route('pizzas.destory',$pizza->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back">
    <- back to all pizzas</a>

        @endsection