<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';

    protected $fillable = ['user_id', 'blog_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getReply()
    {
        return $this->hasMany(BlogReplyComment::class, 'comment_id');
    }

}
