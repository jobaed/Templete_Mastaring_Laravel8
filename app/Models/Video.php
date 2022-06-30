<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


    // Polkymorphic Many to many Relationship
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
