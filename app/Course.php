<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    
    public function user_course()
    {
        return $this->hasMany(UserCourse::class, 'course_id', 'id');
    }
}
