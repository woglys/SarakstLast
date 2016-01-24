@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::model($list, array('method' => 'put', 'route' => ['lists.update', $list->id], 'class' => 'form')) !!}
    
<h2>Rediģēt Sarakstu</h2>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		Ievades kļudas<br />
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
    {!! Form::label('Apraksts') !!}
    {!! Form::textarea('description', null, array('class'=>'form-control', 'placeholder'=>'Ievadiet īso aprakstu')) !!}
</div>
 
<div class="form-group">
    {!! Form::submit('Rediģēt!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>

@endsection

