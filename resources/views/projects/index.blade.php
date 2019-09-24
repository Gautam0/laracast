@extends('layout')

@section('content')

	<h3>Projects</h3>

	@foreach ( $projects as $project )
		
		<li>
			
			<a href="/projects/{{ $project->id }}">{{ $project->title }}</a>

		</li>

	@endforeach

@endsection

