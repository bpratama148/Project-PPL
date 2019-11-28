<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table='penggunas';
    protected $fillable = ['name', 'password', 'email'];


public function getRouteKeyName()
{
	return 'name'; 
}

}