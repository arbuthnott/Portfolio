<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller {

	public function index() {
        return "Project controller, index function";
    }
    
    public function show(Project $project) {
        dd($project);
    }

}
