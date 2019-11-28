<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['id_pengguna','nama','deskripsi','gambar'];


public function comments()
{
	return $this->morphMany('App\gkomen','commentable');
}



}

