<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Type extends Model
{
    protected $fillable = ['name'];
    public function articles()
        {
            return $this->hasMany(Article::class);
        }
}