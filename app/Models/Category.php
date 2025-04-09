<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
