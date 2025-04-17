<?php

namespace App\Models;

use HasFactory;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;

    protected $fillable = ['title', 'subtitle', 'body', 'image', 'user_id', 'category_id', 'is_accepted', 'slug', 'type_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'category' => $this->category,
            'type' => $this->type,
        ];
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Get the estimated read duration of the article in minutes.
     *
     * The time is calculated by dividing the total word count of the article
     * by 200, which is the average number of words that an adult can read in
     * a minute.
     *
     * @return int
     */
/*******  2c349418-4899-46ca-a14a-3b716dae8335  *******/
    public function readDuration()
    {
        $totalWords = Str::wordCount($this->body);
        $minutesToRead = round($totalWords / 200);
        return intval($minutesToRead);
    }
}
