@extends('layout')

@section('content')	
<h3>Create task</h3>
@include('errors')
<div class="row">
	<div class="col-md-12">
		{!! Form::open(['route' => ['tasks.store']]) !!}
		<div class="form-group">
			<input type="text" class="form-control" name="title" value="{{ old('title') }}">
			<br>
			<textarea name="description"  cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
			<br>
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection