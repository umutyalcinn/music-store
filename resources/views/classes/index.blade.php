@extends('layouts.app')

@section('content')
    <a class="mb-4" href="/classes/create">New Class</a>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Id</th>
            <th class="text-center">Class Type</th>
            <th class="text-center">Teacher</th>
            <th class="text-center">Customer</th>
            <th class="text-center">Price</th>
            <th class="text-center">Active</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </thead>
        <tbody>
            @foreach($classes as $k => $v)
                <tr>
                    <td class="text-center">{{ $v->id }}</td>
                    <td class="text-center">{{ $class_types[$v->class_type_id]->description }}</td>
                    <td class="text-center">{{ $teachers[$v->teacher_id]->name.' '.$teachers[$v->teacher_id]->surname }}</td>
                    <td class="text-center">{{ $customers[$v->customer_id]->name.' '.$customers[$v->customer_id]->surname }}</td>
                    <td class="text-center">{{ $v->price }}</td>
                    <td class="text-center">{{ $v->is_active }}</td>
                    <td class="text-center"><a href="customer/edit/{{$v->id}}"><i class="fa-solid fa-pen m-1"></i>Edit</td>
                    <td class="text-center"><a href="customer/delete/{{$v->id}}"><i class="fa-solid fa-trash m-1"></i>Delete</td>
                </tr>
            @endforeach
        </tbody>

@endsection
