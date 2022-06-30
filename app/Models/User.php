<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable = ['project_id'];

    protected $asts = [
        'email_verified_at' => 'datetime',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class, 'user_id', 'id');
    }

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
