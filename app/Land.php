<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $guarded = [];
    public function landProfile()
    {
        return $this->hasOne('App\LandProfile', 'land_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    public function landOwner()
    {
        return $this->belongsTo('App\LandOwner', 'landOwner_id', 'id');
    }

}
