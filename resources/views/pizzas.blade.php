@extends('layouts.layout')

@section('content')
            <div class="flex-center position-ref full-height">
                <div class="content">
                <img src="/img/pizza_house.png" alt="pizza house logo">
                    <div class="title m-b-md">
                    pizza list
                    </div>
                       @foreach($pizzas as $pizza)
                        <div>
                             {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                        </div>
                       @endforeach
                </div>
            </div>
@endsection