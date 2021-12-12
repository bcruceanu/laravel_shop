@extends('layouts.app')

@section('content')

    {{-- <main> --}}
    @foreach ($products as $product)



        <div class="container p-2 m-1">
            <div class="row">
                <div class="col-md-4 col-sm-12 bg-light d-flex justify-content-center">
                    <img class="m-1" src="{{ $product->picture_url }}" alt="web-creation" style="max-height: 300px; max-width: 100%">
                </div>
                <div class="col-md-8 col-sm-12 bg-light d-flex flex-column">
                    <h1 class="mt-2 p-3">{{ $product->name }}</h1>
                    <p class="mt-1 p-3">{{ $product->description }}</p>
                    <p class="mt-1 p-3">Price: {{ $product->price }} lei</p>
                    <div class="row justify-content-between">
                        <a href="{{ route('products.show', $product->id) }}"
                            class="btn btn-outline-success m-1" style="min-width: 100px; max-height: 40px">View</a>
                        <a onclick="addToCart({{ $product }})" class="button btn-outline-success m-1"
                            style="max-width: 200px; align-self: end; font-size: unset" href="{{ route('home') }}">Add to
                            cart
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-cart" viewBox="0 0 20 20">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    @endforeach

    @can('create', $product)
        <div class="container-fluid p-2 m-1 bg-light">
            <div class="row">

                <div class="col d-flex flex-column">
                    <h1 class="mt-2 p-3">Admin Console</h1>
                    <a href="{{ route('products.create') }}" class="btn btn-outline-success m-1" style="max-width: 100px; align-self:center;">Create Product</a>


                </div>

            </div>
        </div>
    @endcan

    {{-- </main> --}}

@endsection
<script src="{{ asset('js/index.js') }}"></script>
