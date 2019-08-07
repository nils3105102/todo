@extends('layouts.app')
@section('content')
    <a class="btn btn-secondary mt-lg-4" href="{{url('/')}}">Go back</a>
    <h1>{{$todo->text}}</h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <p>{{$todo->body}}</p>

    <br><br>
    <div class="">


    <a href="{{url('todo')}}/{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>
        {{ Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class'=> 'float-right']) }}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::bsSubmit('Delete', ['class'=> 'btn btn-danger']) }}
    {{ Form::close() }}
@endsection
