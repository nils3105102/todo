@extends('layouts.app')
@section('content')
    <h1 class="mt-lg-4">Create todo</h1>
    {{ Form::open(['action' => 'TodosController@store', 'method' => 'POST']) }}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit', ['class'=> 'btn btn-secondary']) }}
    {{ Form::close() }}
@endsection
