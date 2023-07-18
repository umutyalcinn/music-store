@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Create Product</h3>
    </div>
    <div class="card-body">
        <form action="/product/store" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="productName">Product Name: </label>
                <input class="form-control" id="productName" name="productName" type="text"/>
            </div>
            <div class="form-group m-3">
                <label for="description">Description: </label>
                <input class="form-control" id="description" name="description" type="text"/>
            </div>
            <div class="form-group m-3">
                <label for="price">Price: </label>
                <input class="form-control w-25" id="price" name="price" type="number" min="1" step="any"/>
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
