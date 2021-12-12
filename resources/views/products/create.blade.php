@extends('layouts.app')

@section('content')

    {{-- <main> --}}
    <div class="container p-2 m-1">
        {{-- <div class="row"> --}}
            <form action="{{route('products.store')}}" method="POST"> @csrf
                <div class="form-group">
                    <label for="name" class="text-white">Product Name</label>
                    <textarea class="form-control" name="name" id="name" cols="30"
                    rows="2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="description" class="text-white">Product Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30"
                        rows="10"> </textarea> 
                </div>
                <div class="form-group">
                    <label for="picture_url" class="text-white">Product Image URL</label>
                    <textarea class="form-control" name="picture_url" id="picture_url" cols="30"
                        rows="10"> </textarea> 
                </div>
                <div class="form-group">
                    <label for="price" class="text-white">Product Price</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="price"
                            value="">
                </div>
                <div class="form-group text-center"> <button class="btn btn-outline-success">Create</button> </div>
            </form>

        {{-- </div> --}}
    </div>

    {{-- </main> --}}

@endsection
<script src="{{ asset('js/index.js') }}"></script>
