<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //protected $fillable=['name', 'description', 'category', 'slug'];    
    protected $guarded=[];  

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
