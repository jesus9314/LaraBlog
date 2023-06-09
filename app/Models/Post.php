<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Asignacion Masiva
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Relaciones uno a muchos inversa
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Relaciones muchos a muchos
     */
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Relacion uno a uno polimórfica
     */
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

     /**
     * slug
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
