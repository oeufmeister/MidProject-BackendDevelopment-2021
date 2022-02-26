<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('courses')->insert(
        // [
        //     'coursename' => "C++",
        //     'coursecode' => "C_CPP",
        // ],[
        //     'coursename' => "JavaScript",
        //     'coursecode' => "C_JS",
        // ],[
        //     'coursename' => "C#",
        //     'coursecode' => "C_CS",
        // ],[
        //     'coursename' => "Python",
        //     'coursecode' => "C_PY",
        // ],[
        //     'coursename' => "HTML",
        //     'coursecode' => "C_HC",
        // ]
        // );
        DB::table('courses')->insert(array (
            0 => 
                array (            
                    'coursename' => "C++",
                    'coursecode' => "C_CPP",
            ),
            1 => 
                array (
                    'coursename' => "JavaScript",
                    'coursecode' => "C_JS",
            ),
            2 => 
                array (
                    'coursename' => "C#",
                    'coursecode' => "C_CS",
            ),
            3 => 
                array (
                    'coursename' => "Python",
                    'coursecode' => "C_PY",
            ),
            4 => 
                array (
                    'coursename' => "HTML",
                    'coursecode' => "C_HC",
            ),
            ));
    }
}
