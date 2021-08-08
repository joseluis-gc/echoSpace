<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = [
        'chat_id',
        'user_id',
        'message',
        'file_path',
        'file_name',
        'send_date',
        'type',
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function chat()
    {
        # code...
        return $this->belongsTo(Chats::class);
    }
}
