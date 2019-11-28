<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fkomen extends Model
{
    public function commentable()
    {
    	return $this-morphTo();
    }
}
