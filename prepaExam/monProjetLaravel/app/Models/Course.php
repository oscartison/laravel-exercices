<?php

namespace App\Models;

class Course
{
    public $name;
    public $lib;
    public $credits;
    
    
    public function __construct($name,$lib,$credits)
    {
        $this->name = $name;
        $this->credits = $credits;
        $this->lib = $lib;
    }

    public static function Select($id)
    {
        $course =  \DB::select("select * from Course where Course.id = :id", ["id" => $id]);
    
        return new Course($course->id,$course->title,$course->credits);
    }
}