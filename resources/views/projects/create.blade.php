@extends('layout')

@section('content')

	<h3>Create a new Project</h3>

	<form method="POST" action="/projects">
		
		{{ csrf_field() }}

		<div class="field">

			<label class="label" for="title">Project Title</label>
			
			<div class="control">

				<input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" required>

			</div>

		</div>

		<div class="field">

			<label class="label" for="description">Project Description</label>
			
			<div class="control">

				<textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" required>{{ old('description') }}</textarea>
				
			</div>

		</div>

		<div class="field">
			
			<div class="control">
				
				<button type="submit" class="button is-link">Create Project</button>
				
			</div>

		</div>	


		@include('errors')

	</form>

@endsection
