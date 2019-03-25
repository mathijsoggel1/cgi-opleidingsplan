<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'client_id'
    ];
    public function roles()
    {
        return $this->hasMany('App\Role', 'client_id');
    }
}
