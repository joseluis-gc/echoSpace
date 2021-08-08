<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    #protected $table = 'posts';

    protected $fillable = [
        'image_path',
        'description',
        'date_post',
        'user_id',
    ];

    //relaciones
    public function user()
    {
        # code...
        return $this->belongsTo(user::class);
    }

    public function comments()
    {
        # code...
        return $this->hasMany(Comments::class, 'post_id');
    }

    public function likes()
    {
        # code...
        return $this->hasMany(Likes::class, 'post_id');
    }

}
