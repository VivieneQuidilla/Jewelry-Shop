<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }

    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }

}
