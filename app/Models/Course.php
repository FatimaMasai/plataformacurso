<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $guarded = ['id', 'status'];

    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    //uno a muchos 
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }

    //uno a muchos 
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    //uno a muchos 
    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }

    //uno a muchos 
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

 
    //relacion uno a muchos inversa, usuario que ah dictado el curso
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //relacion uno a muchos inversa
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    //relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    //relacion uno a muchos inversa
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
  

    //muchos a muchos, todos los estudiantes que tenga este curso
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //relacion uno a uno poliformfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
