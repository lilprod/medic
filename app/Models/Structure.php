<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function institutions()
    {
        return $this->hasMany('App\Models\HealthInstitution');
    }
}
