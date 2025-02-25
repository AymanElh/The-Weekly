<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'description', 'price', 'picture', 'user_id', 'status'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
