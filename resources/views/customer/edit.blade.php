@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Edit Student</h3>
    </div>
    <div class="card-body">
        <form action="/student/update/{{ $customer->id }}" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="studnetId">Student ID: </label>
                <input class="form-control" id="customerId" name="customerId" type="text" value="{{ $customer->id }}" readonly/>
                    @error('customerId')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            <div class="form-group m-3">
                <label for="name">Name: </label>
                <input class="form-control" id="name" name="name" type="text" value="{{ $customer->name }}"/>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="form-group m-3">
                <label for="surname">Surname: </label>
                <input class="form-control" id="surname" name="surname" type="text" value="{{ $customer->surname }}"/>
                    @error('surname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="form-group m-3">
                <label for="price">Birth Date: </label>
                <input class="form-control w-25" id="birthDate" name="birthDate" type="date" value="{{ $customer->birth_date }}"/>
                    @error('birthDate')
                        <small class="text-danger">{{  $message }}</small>
                    @enderror
            </div>
            <div class="form-group m-3">
                <label for="phoneNumber">Phone Number</label>
                <input class="form-control w-25" id="phoneNumber" name="phoneNumber" type="tel" value="{{ $customer->phone_number }}" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
                    @error('phoneNumber')
                        <small class="text-danger">{{  $message }}</small>
                    @enderror
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
