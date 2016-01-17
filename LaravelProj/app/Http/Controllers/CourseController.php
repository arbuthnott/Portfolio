<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

	public function index() {
		$courses = Course::orderBy('importance', 'desc')->get();
        return view('resume.courses', compact('courses'));
    }
    
    public function show(Course $course) {
		return view('resume.courseDetail', compact('course'));
    }

}
