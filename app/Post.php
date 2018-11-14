<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'header', 'body', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
