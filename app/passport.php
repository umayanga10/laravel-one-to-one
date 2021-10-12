<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
}
