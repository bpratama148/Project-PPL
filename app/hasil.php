<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
   protected $fillable = ['gejala1','gejala2','gejala3','gejala4','gejala5','gejala6' ,'total'];

   public function latepost()
{
	return $this->hasMany('\App\hasil')->latest(); 
}
}
 
