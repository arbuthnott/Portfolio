<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

	public function index() {
        return "Course controller, index function";
    }
    
    public function show(Course $course) {
        dd($course);
    }

}
