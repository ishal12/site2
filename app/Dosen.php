<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public function jabatan(){
		return $this->belongsTo('App\Jabatan');
	}
	
	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
