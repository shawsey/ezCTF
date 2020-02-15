<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //
    public function scopeCrypto($query)
    {
    	return $query->where('category', '=', 'crypto');
    }
}
