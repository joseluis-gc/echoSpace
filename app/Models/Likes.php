<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
    ];

    public function post()
    {
        # code...
        return $this->belongsTo(Posts::class);

    }

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);

    }
}
