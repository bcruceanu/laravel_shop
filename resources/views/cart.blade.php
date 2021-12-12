@extends('layouts.app')

@section('content')
    
    {{-- <main> --}}
    
    <div class="container p-2 m-1" id="productsListId">
        
        {{-- cart products go here --}}
    </div>

    <div class="container p-2 m-1">
        <a href="{{ route('success') }}" class="btn btn-outline-success m-3" style="max-width: fit-content;" onclick="checkOut()">Checkout</a>
    </div>

    

    {{-- </main> --}}

@endsection
<script src="{{ asset('js/index.js') }}"></script>