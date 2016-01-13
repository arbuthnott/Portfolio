<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller {

	public function index() {
		$projects = Project::orderBy('importance', 'desc')->get();
        return view('resume.projects', compact('projects'));
    }
    
    public function show(Project $project) {
        return view('resume.projectDetail', compact('project'));
    }

}
