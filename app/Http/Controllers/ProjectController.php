<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
	public function index() {

		$projects = Project::all();

		return view( 'projects.index', compact('projects') );

	}


	public function create() {

		return view( 'projects.create' );

	}


	public function show(Project $project ) {

		// $project = Project::findOrFail($id);

		return view('projects.view', compact('project'));

	}


	public function store() {

		// $project = new Project();

		// $project->title = request('title');
		// $project->description = request('description');

		// $project->save();

		// Project::create([

		// 	'title' => request('title'),
		// 	'description' => request('description')

		// ]);

		Project::create( request(['title','description']) );

		return redirect('/projects');

	}


	public function edit( Project $project ) {

		// $project = Project::findOrFail( $id );

		return view( 'projects.edit', compact('project') );

	}


	public function update( Project $project ) {

		// $project = Project::findOrFail( $id );

		// $project->title = request('title');
		// $project->description = request('description');

		// $project->save();

		$project->update( request(['title','description']) );

		return redirect('/projects');

	}


	public function destroy( Project $project ) {

		$project->delete();

		return redirect('/projects');

	}


}
