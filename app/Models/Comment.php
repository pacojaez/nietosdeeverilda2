<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*** The attributes that are mass assignable. **/
    protected $fillable = [ 
        'user_id', 
        'image_id',
        'post_id',
        'content',
        'parent_id' 
    ];

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
