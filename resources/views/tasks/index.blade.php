@extends('layout')

@section('content')
	<row>
		<h3>My Tasks</h3>
		<a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
		<div class="col-md-10 col-md-offset-1">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($tasks as $task)
					<tr>
						<td>{{ $task->id }}</td>
						<td>{{ $task->title }}</td>
						<td>
							<a href="{{ route('tasks.show', $task->id) }}">
								<i class="glyphicon glyphicon-eye-open"></i>
							</a>
							<a href="{{ route('tasks.edit', $task->id) }}">
								<i class="glyphicon glyphicon-edit"></i>
							</a>
							{!! Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) !!}
							<button onclick="return confirm('Are you sure?')">
								<i class="glyphicon glyphicon-remove"></i>
							</button>
							{!! Form::close() !!}
							</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</row>
@endsection