<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_send',
        'user_receive',
    ];

    public function userSend()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function userReceive()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        # code...
        return $this->hasMany(Messages::class, 'chat_id');
    }
}
