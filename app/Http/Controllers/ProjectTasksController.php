<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

	public function store(Project $project) {

		$attribute = request()->validate([

			'description' => ['required','min:5']

		]);

		$project->addTask( $attribute );


		// Task::create([

		// 	'project_id' => $project->id,

		// 	'description' => request('description')

		// ]);

		return back();

	}
    
	public function update( Task $task ) {

		
		$method = request()->has('completed') ? 'complete' : 'incomplete';

		$task->$method();


		// request()->has('completed') ? $task->complete() : $task->incomplete();



		// if ( request()->has('completed') ) {
			
		// 	$task->complete();

		// } else {

		// 	$task->incomplete();

		// }


		
		// $task->complete( request()->has('completed') );



		// $task->update([

		// 	'completed' => request()->has('completed')

		// ]);


		return back();

	}

}
