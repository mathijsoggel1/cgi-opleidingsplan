<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
        'name', 'client_id'
    ];
    public function modules()
    {
        return $this->hasMany('App\Module', 'role_id');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
