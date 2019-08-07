@extends('layouts.app')
@section('content')
    <a href="{{url('todo')}}/{{$todo->id}}" class="btn btn-secondary">Go back</a>
    <h1 class="mt-lg-4">Edit todo</h1>
    {{ Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) }}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT')}}
        {{ Form::bsSubmit('Submit', ['class'=> 'btn btn-secondary']) }}
    {{ Form::close() }}
@endsection
