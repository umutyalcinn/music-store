@extends('layouts.app')

@section('content')
    <div>
        <a href="/product/create"> New Product</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Product Photo</th>
            <th class="text-center">Product Id</th>
            <th class="text-center">Product Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </thead>
        <tbody>
            @foreach($products as $k => $v)
                <tr>
                    <td class="text-center"><img src="{{ $v->image_url }}" width="75" height="75"/></td>
                    <td class="text-center align-middle">{{ $v->id }}</td>
                    <td class="text-center align-middle">{{ $v->product_name }}</td>
                    <td class="text-center align-middle">{{ $v->price }}</td>
                    <td class="text-center align-middle"><a href="/product/edit/{{ $v->id }}"><i class="fa-solid fa-pen m-1"></i>Edit</a></td>
                    <td class="text-center align-middle"><a href="/product/delete/{{ $v->id }}"><i class="fa-solid fa-trash m-1"></i>Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
