@extends('layouts.master')

@section('content')

<div class="col-md-12">

  <p>
    <a href="/lists/create" class="btn btn-success">Izveidot jauno sarakstu</a>
  </p>

<h1>Jūsu saraksti</h1>

  @if (count($lists) > 0)

      <table class="table table-striped">
      <thead>
      <tr>
        <th>Nosaukums</th>
        <th>Apraksts</th>
        <th>Izveidots</th>
        <th>Palikušie uzdevumi</th>
        <th></th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      @foreach ($lists as $list)

        <tr>
          <td>
            <a href="{{ URL::route('lists.show', $list->id) }}">{{ $list->name }}</a>
          </td>
          <td>
            {{ $list->description }}
          </td>
          <td>
            {{ date("F d, Y", strtotime($list->created_at)) }}
          </td>
          <td>
            {{ $list->remainingTasks() }} / {{ $list->tasks()->count() }}
          </td>
          <td>
            <a class="btn btn-success" href="{{ URL::route('lists.edit', $list->id) }}">Rediģēt</a>
          </td>
          <td>
            {!! Form::open(array('route' => array('lists.destroy', $list->id), 'method' => 'delete')) !!}
              <button type="submit" class="btn btn-success" href="{{ URL::route('lists.destroy', $list->id) }}" title="Delete list">
              Izdzēst
              </button>
            {!! Form::close() !!}
          </td>
        </tr>

      @endforeach
      </tbody>
      </table>

    {!! $lists->render() !!}

    @else
     <p>
      Jums nav neviena saraksta! <a href="/lists/create">Izveidot sarakstu</a>
    </p>
    @endif

</div>

@endsection