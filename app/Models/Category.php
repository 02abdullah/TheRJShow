<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //manually identify which table to reference
    protected $table = 'categories';

    //define relationship
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
