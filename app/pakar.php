<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pakar extends Model
{
     protected $fillable = ['name', 'password', 'email','profesi','no_telp','alamat','foto','deksripsi'];
}
