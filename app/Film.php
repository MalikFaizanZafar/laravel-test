<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Comment;
class Film extends Model
{
  use Sluggable;
    protected $fillable=['name','description','release_date','rating','ticket_price','country','genre','photo'];

    public function comments(){
      return $this->hasMany('App\Comment');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
