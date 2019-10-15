<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandOwner extends Model
{
    protected $guarded = [];

    public function lands()
    {
        return $this->hasMany('App\Land', 'landOwner_id', 'id');
    }
}
