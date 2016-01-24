<h1>Reģsitrēts lietotājs</h1>

<ul>
@forelse ($users as $user)

<li>{{ $user->name  }} ({{ $user->email }})</li>

@empty

<li>Nereģistrēts lietotājs</li>

@endforelse
</ul>
