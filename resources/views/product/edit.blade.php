@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Edit Product</h3>
    </div>
    <div class="card-body">
        <form action="/product/update/{{ $product->id }}" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="productCode">Product Code: </label>
                <input class="form-control" id="productCode" name="productCode" type="text" value="{{ $product->id }}" readonly/>
                    @error('productCode')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            <div class="form-group m-3">
                <label for="productName">Product Name: </label>
                <input class="form-control" id="productName" name="productName" type="text" value="{{ $product->product_name }}"/>
                    @error('productName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="form-group m-3">
                <label for="description">Description: </label>
                <input class="form-control" id="description" name="description" type="text" value="{{ $product->product_description }}"/>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="form-group m-3">
                <label for="price">Price: </label>
                <input class="form-control w-25" id="price" name="price" type="number" min="1" step="any" value="{{ $product->price }}"/>
                    @error('price')
                        <small class="text-danger">{{  $message }}</small>
                    @enderror
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
