<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];

    protected $hidden = [
        // 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Commint::class);
    }
}
