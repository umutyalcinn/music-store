@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Create Customer</h3>
    </div>
    <div class="card-body">
        <form action="/customer/store" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="productName"> Name: </label>
                <input class="form-control" id="name" name="name" type="text"/>
            </div>
            <div class="form-group m-3">
                <label for="description">Surname: </label>
                <input class="form-control" id="surname" name="surname" type="text"/>
            </div>
            <div class="form-group m-3">
                <label for="price">Birth Date: </label>
                <input class="form-control w-25" id="birtDate" name="birthDate" type="date"/>
            </div>
            <div class="form-group m-3">
                <label for="price">Phone Number: </label>
                <input class="form-control w-50" id="phoneNumber" name="phoneNumber" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
