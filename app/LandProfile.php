<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandProfile extends Model
{
    protected $guarded = [];
    public function land()
    {
        return $this->belongsTo('App\Land', 'land_id', 'id');
    }
}
