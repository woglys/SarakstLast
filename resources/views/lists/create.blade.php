@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::open(array('route' => 'lists.store', 'class' => 'form', 'novalidate' => 'novalidate')) !!}
    
<h2>Izveidot sarakstu</h2>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		Ievades kļuda<br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
 
<div class="form-group">
    {!! Form::label('Saraksta Nosaukums') !!}
    {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Nosaukums')) !!}
</div>

<div class="form-group">
    {!! Form::label('Kategorija') !!}<br />
    {!! Form::select('category', array_merge(['0' => 'Izvēlēties...'], $categories), null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Apraksts') !!}
    {!! Form::textarea('description', null, array('class'=>'form-control', 'placeholder'=>'Ievadiet īso aprakstu')) !!}
</div>
 
<div class="form-group">
    {!! Form::submit('Izveidot!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>

@endsection
