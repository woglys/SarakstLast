@extends('layouts.master')

@section('content')

<h1>{{ $list->name }}</h1>

<p>
Izveidots: {{ date('F d, Y', strtotime($list->created_at)) }} <br />
Mainīts: {{ date('F d, Y', strtotime($list->updated_at)) }}<br />
{{ $list->description }}
</p>

<h2>Uzdevumi</h2>

<p>
<a href="{{ URL::route('lists.tasks.create', $list->id) }}" class='btn btn-primary'>Pievienot uzdevumu</a>
</p>

@if($list->tasks->count() == 0)

<p>
Šīm sarakstam nav neviena uzdevuma
</p>

@else

  <div class="table-responsive">
    <table class="table table-striped">
      @foreach ($list->tasks as $task)      
      <tr>
        <td>
        @if($task->done)
          <del><a>{{ $task->name }}</a></del>
        @else
          <a >{{ $task->name }}</a>
        @endif
        </td>
        <td style="text-align: right;">

       

        </td>
      </tr>
      @endforeach
    </table>
  </div>

@endif

@endsection
