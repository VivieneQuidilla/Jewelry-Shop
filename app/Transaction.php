<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
