<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';
	
	public function users(){
		return $this->hasMany('App\User');
	}

	protected $fillable = [
        'nama', 
    ];
}
