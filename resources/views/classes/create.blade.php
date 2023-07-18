@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Create Class</h3>
    </div>
    <div class="card-body">
        <form action="/classes/store" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="classType">Class Type: </label>
                <select id="classType">
                    <option value="-1">Seçiniz...</option>
                    @foreach($class_types as $k => $v)
                        <option value="{{ $v->id }}">{{ $v->description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group m-3">
                <label for="classType">Teacher: </label>
                <select id="classType">
                    <option value="-1">Seçiniz...</option>
                    @foreach($teachers as $k => $v)
                        <option value="{{ $v->id }}">{{ $v->name.' '.$v->surname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group m-3">
                <label for="classType">Customer: </label>
                <select id="classType">
                    <option value="-1">Seçiniz...</option>
                    @foreach($customers as $k => $v)
                        <option value="{{ $v->id }}">{{ $v->name.' '.$v->surname }}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-primary m-3" type="submit" value="Save"/>
        </form>
    </div>
</div>
@endsection
