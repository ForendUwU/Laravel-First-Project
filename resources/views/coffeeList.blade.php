@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Coffee List
        </div>
        <!-- Basic print -->
        <!-- {{-- <p>{{ $type }} - {{ $base }} - {{ $price }}</p> --}} -->

        <!-- Blade basics -->
        <!-- {{-- @if($price > 15)
            <p>This pizza is expensive</p>
        @elseif($price <= 15)
            <p>This pizza is cheap</p>
        @endif

        @unless($type == "hawaiian")
            <p>This pizza isn't hawaiian</p>
        @endunless

        @php
            $name = "John";
            echo $name;
        @endphp --}} -->

        <!-- @for($i = 0; $i < count($coffeeArr); $i++)
            <p>Type is {{ $coffeeArr[$i]['type'] }}</p>
        @endfor -->

        <!-- For Query Parametrs -->
        <!-- {{-- <p>{{ $name }} and {{ $age }}</p> --}} -->

        @foreach($coffeeArr as $coffee)
            <div>
                {{ $loop->index }} {{ $coffee['type'] }} -- {{ $coffee['amount'] }} -- {{ $coffee['price'] }}

                @if($loop->first)
                    <span> first iteration</span>
                @endif
                @if($loop->last)
                    <span> last iteration</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
