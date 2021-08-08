<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;


    protected $fillable = [
        'post_id',
        'user_id',
        'comment',
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
