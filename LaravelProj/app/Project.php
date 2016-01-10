<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $fillable = ['name', 'alias', 'importance', 'github_link', 'other_link', 'completion_date', 'description'];
	
	public function skills() {
		return $this->belongsToMany('App\Skill');
	}
	
	public function courses() {
		return $this->belongsToMany('App\Course');
	}

}
