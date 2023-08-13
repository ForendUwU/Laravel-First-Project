@extends('layouts.layout')

@section('content')
<div class="wrapper create-coffee">
    <h1>Create a New Coffee</h1>
    <form action="/coffeeList" method="POST">
        <!--Cross-Site Request Forgery-->
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Choose coffee</label>
        <select name="type" id="type">
            <option value="Americano">Americano</option>
            <option value="Cappuccino">Cappuccino</option>
        </select>

        <label for="type">Choose amount</label>
        <select name="amount" id="amount">
            <option value="200 ml.">200 ml.</option>
            <option value="300 ml.">300 ml.</option>
            <option value="500 ml.">500 ml.</option>
        </select>
        <fieldset>
            <label>Syrops:</label>
            <input type="checkbox" name="syrop[]" value="mint">Mint<br>
            <input type="checkbox" name="syrop[]" value="salted caramel">Salted caramel<br>
            <input type="checkbox" name="syrop[]" value="blackberry">Blackberry<br>
        </fieldset>

        <input type="submit" value="Order">
    </form>
</div>
@endsection
