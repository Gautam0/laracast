@extends('layout')

@section('content')

	<h3>Create a new Project</h3>

	<form method="POST" action="/projects">
		
		{{ csrf_field() }}

		<div>
			
			<input type="text" name="title" placeholder="Project title">

		</div>

		<div>
			
			<textarea name="description" placeholder="Project Description"></textarea>

		</div>

		<div>
			
			<button type="submit">Create Project</button>

		</div>	

	</form>

@endsection
