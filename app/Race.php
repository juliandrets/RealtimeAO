<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $keyType = 'string';
    protected $guarded = [];

    public function getHead()
    {
        return $this->hasOne('App\Head', 'id', 'head_id');
    }
}
