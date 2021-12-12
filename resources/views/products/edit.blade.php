@extends('layouts.app')
@section('content')

    <h1 class="text-center my-5" style="color: white; font-family: 'Courier New', Courier, monospace;">Edit Product</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-center border-success">ID: {{ $product->id }}</div>
                <div class="card-body">
                    <form action="{{route('products.update', $product->id)}}" method="POST"> @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <textarea class="form-control" name="name" id="name" cols="30"
                            rows="2">{{ $product->name }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30"
                                rows="10">{{ $product->description }}</textarea> 
                        </div>
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="price"
                                    value={{ $product->price }}>
                        </div>
                        <div class="form-group text-center"> <button class="btn btn-outline-success">Editeaza</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
