@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}

<h1>Reģistrēties</h1>

<p>
Izveido profilu, lai taisītu sarakstus!
</p>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		Ievādes kļūda<br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="form-group">
    {!! Form::label('name', 'Vārds') !!}
    {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Vārds')) !!}
</div>
<div class="form-group">
    {!! Form::label('E-pasta adrese') !!}
    {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'E-pasta adrese')) !!}
</div>
<div class="form-group">
    {!! Form::label('Parole') !!}
    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Parole')) !!}
</div>
<div class="form-group">
    {!! Form::label('Apstiprināt paroli') !!}
    {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Apstiprināt paroli')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Reģistrēties!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@endsection