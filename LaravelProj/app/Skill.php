<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

	protected $fillable = ['name', 'alias', 'description', 'importance'];
    
    public function relatedSkills() {
        return $this->belongsToMany('App\Skill', 'skill_relation', 'skill_id', 'related_id');
    }
	
	public function courses() {
		return $this->belongsToMany('App\Course');
	}
	
	public function projects() {
		return $this->belongsToMany('App\Project');
	}

}
