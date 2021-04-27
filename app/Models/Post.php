<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*** The attributes that are mass assignable. **/
    protected $fillable = [ 
        'title', 
        'file_name',
        'body',
        'description',
        'place',
        'date',
        'user_id' 
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

     /**
     * Get the post that owns the comment.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /****
     * Searching dinamicaly
     **/
    public static function search( $search ){
        
        /**
        *The function get a parameter from the View and retrieve the query from the DB
        */
        return empty($search) ? static::query()
                                : static::query()
                                        ->where('id', 'like', '%'.$search.'%')
                                        ->orWhere('title', 'like', '%'.$search.'%')
                                        ->orWhere('body', 'like', '%'.$search.'%')
                                        ->orWhere('place', 'like', '%'.$search.'%')
                                        ->orWhere('description', 'like', '%'.$search.'%')
                                        ->orWhere('file_name', 'like', '%'.$search.'%');

    }
    /**
     * TO DO
     * Search by decade
     */
    // public function searchByDecade( $decade){
    //     dd('search by decade');
    // }
}
