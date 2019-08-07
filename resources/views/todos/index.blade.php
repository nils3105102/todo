@extends('layouts.app')
@section('content')
<h1 class="mt-lg-4">Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
    <div class="card card-body bg-light mt-lg-4">
        <h3><a href="{{url('todo')}}/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
    </div>

    @endforeach
@endif
@endsection
