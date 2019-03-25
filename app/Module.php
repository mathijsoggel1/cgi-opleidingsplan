<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class Module extends Model
{
	//use Searchable;

	 /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'posts_index';
    }
   

	protected $fillable = [
        'leadership_competence', 
        'leadership_sub_competence', 
        'level', 
        'learn_url', 
        'certificate_url', 
        'moscow', 
        'course_date', 
        'description', 
        'role_id',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
