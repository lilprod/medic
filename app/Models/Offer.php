<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    use HasFactory, Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getLink()
    {
        return url('offre/'.$this->slug);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function structure()
    {
        return $this->belongsTo('App\Models\Structure');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function applies()
    {
        return $this->hasMany('App\Models\Apply');
    }
}
