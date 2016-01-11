<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;

use Illuminate\Http\Request;

class SkillController extends Controller {

	public function index() {
        $skills = Skill::orderBy('importance', 'desc')->get();
        return view('resume.skills', compact('skills'));
    }
    
    public function show(Skill $skill) {
        dd($skill);
    }

}
