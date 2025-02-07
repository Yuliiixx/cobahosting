<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';

    protected $primaryKey = 'message_id';

    protected $fillable = [
        'message_id',
        'name',
        'email',
        'message',

    ];

    
}
