<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = [
        'user_id','course_id',
    ];
    public function user()
    {
        return $this->belongsTo(Post::class,'id','user_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'id','course_id');
    }
}
