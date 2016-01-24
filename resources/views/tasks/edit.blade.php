@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::model($task, array('method' => 'put', 
    'route' => array('lists.tasks.update', $task->todolist->id, $task->id), 'class' => 'form')) !!}

<h2>Rediģēt uzdevumu (<a href="{{ URL::route('lists.show', $task->todolist->id) }}">{{ $task->todolist->name }}</a>)</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        Ievades kļūda<br />
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {!! Form::label('Nosaukums') !!}
    {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Nosaukums')) !!}
</div>

<div class="form-group">
    {!! Form::label('Izpildes termiņš') !!}
    {!! Form::input('date', 'due', null, array('class'=>'form-control', 'placeholder' => date('Y-m-d'))) !!}
</div>

<div class="checkbox">
    {!! Form::label('Pabeigts?') !!}
    {!! Form::checkbox('done', 'true') !!}
</div>
<div class="form-group">
    {!! Form::submit('Rediģēt', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@stop