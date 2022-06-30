<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // Many To Many Morph Reletionship
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // One To One Morph Reletionship
    public function comment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }

    // Polkymorphic Many to many Relationship
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
