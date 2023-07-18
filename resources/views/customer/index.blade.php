@extends('layouts.app')

@section('content')
    <a class="mb-4" href="/customer/create">New Customer</a>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Surname</th>
            <th class="text-center">Birth Date</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </thead>
        <tbody>
            @foreach($customers as $k => $v)
                <tr>
                    <td class="text-center">{{ $v->id }}</td>
                    <td class="text-center">{{ $v->name }}</td>
                    <td class="text-center">{{ $v->surname }}</td>
                    <td class="text-center">{{ $v->birth_date }}</td>
                    <td class="text-center">{{ $v->phone_number }}</td>
                    <td class="text-center"><a href="customer/edit/{{$v->id}}"><i class="fa-solid fa-pen m-1"></i>Edit</td>
                    <td class="text-center"><a href="customer/delete/{{$v->id}}"><i class="fa-solid fa-trash m-1"></i>Delete</td>
                </tr>
            @endforeach
        </tbody>

@endsection
