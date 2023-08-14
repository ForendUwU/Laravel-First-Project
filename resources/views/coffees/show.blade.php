@extends('layouts.app')

@section('content')
<div class="wrapper coffee-details">
    <h1>Order for {{ $coffee -> name }}</h1>
    <p class="type">Type - {{ $coffee -> type }}</p>
    <p class="amount">Amount - {{ $coffee-> amount }}</p>
    <p class="syrops">Syrops:</p>
    <ul>
        @foreach($coffee->syrops as $syrop)
            <li>{{ $syrop }}</li>
        @endforeach
    </ul>
    <form action="{{ route('coffeeList.delete', $coffee->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete order</button>
    </form>
</div>
<a href="/coffeeList" class="back">Back to coffee list</a>
@endsection
