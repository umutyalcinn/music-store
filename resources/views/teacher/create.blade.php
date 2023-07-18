@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Create Teacher</h3>
    </div>
    <div class="card-body">
        <form action="/teacher/store" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="productName"> Name: </label>
                <input class="form-control" id="name" name="name" type="text"/>
            </div>
            <div class="form-group m-3">
                <label for="description">Surname: </label>
                <input class="form-control" id="surname" name="surname" type="text"/>
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
