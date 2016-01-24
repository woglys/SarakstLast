@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::open(array('route' => array('lists.tasks.store', $list->id), 'class' => 'form')) !!}

<h2>Izveidot uzdevumu ({{ $list->name }})</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        Ievades kļūda.<br />
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
    {!! Form::label('Izpildes Termiņš') !!}
    {!! Form::input('date', 'due', null, array('class'=>'form-control', 'placeholder' => date('Y-m-d'))) !!}
</div>

<div class="checkbox">
    {!! Form::label('Pabeigts?') !!}
    {!! Form::checkbox('done', 'true') !!}
</div>
<div class="form-group">
    {!! Form::submit('Izveidot', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@stop