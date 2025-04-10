<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Article extends Model
{
    protected $fillable = ['title', 'subtitle', 'body', 'image', 'user_id', 'category_id', 'is_accepted'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
