<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function store($message, $email, $name) {
        $comment = new Comment();
        $comment->user_image = 'usr3.svg';
        $comment->email = $email;
        $comment->user_name = $name;
        $comment->comment = $message;
        $comment->save();
    }
}
