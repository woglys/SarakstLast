@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12" style="text-align: center; padding-top: 10%; color: #0B0B3B;">
    <h1>Laipni lūgti Sarakstos!</h1>
    <p>
   Šeit var sastādīt sarakstus
    </p>

    @if (! Auth::check())
      <a href="/auth/register" class="btn btn-primary">Izveidot profilu</a>
    @else
      <a href="{{ URL::route('lists.index') }}" class="btn btn-primary">Skatīt sarakstus</a>
    @endif
<p></p>
     <p><img style="border:5px double black;" alt="Saraksts" src="http://www.toogezer.com/wp-content/uploads/2011/07/To-Do-List.jpg" ></p>


  </div>
</div>

   

@endsection