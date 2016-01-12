<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;

use Illuminate\Http\Request;

class SkillController extends Controller {

	public function index() {
        $languages = Skill::language()->orderBy('importance', 'desc')->get();
		$software = Skill::software()->orderBy('importance', 'desc')->get();
		$technical = Skill::technical()->orderBy('importance', 'desc')->get();
		$other = Skill::other()->orderBy('importance', 'desc')->get();
        return view('resume.skills', compact(['languages', 'software', 'technical', 'other']));
    }
    
    public function show(Skill $skill) {
		return view('resume.skillDetail', compact('skill'));
    }

}
