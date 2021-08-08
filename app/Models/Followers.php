<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'follower_id',
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);

    }

    public function follower()
    {
        # code...
        return $this->belongsTo(User::class);

    }
}
