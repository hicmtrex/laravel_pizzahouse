@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Vag Supreme</option>
            <option value="volvano">Volvano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick">Thick</option>
            <option value="volvano">Volvano</option>
        </select>
        <fieldset>
            <label for="toppings">Extra toppings</label>
            <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms">Mushrooms <br />
            <input type="checkbox" name="toppings[]" id="toppings" value="peppers">Peppers <br />
            <input type="checkbox" name="toppings[]" id="toppings" value="garlic">Garlic <br />
            <input type="checkbox" name="toppings[]" id="toppings" value="olives">Olives <br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection