<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $fillable = ['code', 'name', 'alias', 'grade', 'topic_list', 'description', 'importance'];
    
    public function skills() {
        return $this->belongsToMany('App\Skill');
    }

}
