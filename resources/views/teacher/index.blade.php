@extends('layouts.app')

@section('content')
    <a class="mb-4" href="/teacher/create">New Teacher</a>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Surname</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </thead>
        <tbody>
            @foreach($teachers as $k => $teacher)
                <tr>
                    <td class="text-center">{{ $teacher->id }}</td>
                    <td class="text-center">{{ $teacher->name }}</td>
                    <td class="text-center">{{ $teacher->surname }}</td>
                    <td class="text-center"><a href="teacher/edit/{{$teacher->id}}"><i class="fa-solid fa-pen m-1"></i>Edit</td>
                    <td class="text-center"><a href="teacher/delete/{{$teacher->id}}"><i class="fa-solid fa-trash m-1"></i>Delete</td>
                </tr>
            @endforeach
        </tbody>

@endsection
