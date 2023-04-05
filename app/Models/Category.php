<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Asignacion Masiva
     */
    protected $guarded= [];

    /**
     * Relacion uno a muchos
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    /**
     * slug
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
