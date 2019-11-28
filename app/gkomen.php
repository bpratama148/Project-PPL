<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gkomen extends Model
{
    public function commentable()
    {
    	return $this-morphTo();
    }
}
