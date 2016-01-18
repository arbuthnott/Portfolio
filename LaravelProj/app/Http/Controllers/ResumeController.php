<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResumeController extends Controller {

	public function index() {
        return view('resume.home');
    }
	
	public function overview() {
		return view('resume.overview');
	}
	
	public function contact() {
		// display contact page
	}
	
	public function send() {
		// send requested email, and return to contact page.
	}

}
