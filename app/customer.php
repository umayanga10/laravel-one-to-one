<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function passport()
    {
        return $this->hasOne(passport::class);
    }
}
