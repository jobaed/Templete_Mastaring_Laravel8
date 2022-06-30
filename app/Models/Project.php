<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable = ['title'];

    public function users()
    {
        return $this->hasMany(User::class);
    }


    // For Muyltiple Data Fetch ->
    public function tasks()
    {
        return $this->hasManyThrough(Task::class, User::class);
    }

    // For Single Data Fetch ->
    public function task()
    {
        return $this->hasOneThrough(Task::class, User::class);
    }
}
