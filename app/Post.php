<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function kategori(){
		return $this->belongsTo('App\Kategori');
	}

    protected $fillable = [
        'judul', 'isi', 'foto', 'tanggal', 'kategoriid'
    ];
}
