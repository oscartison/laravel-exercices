<?php

namespace App\Models;

class Student
{
    public $id;
    public $name;
    public $credits;
    public $pae;
    
    
    public function __construct($id, $name,$credits,$pae)
    {
        $this->id = $id;
        $this->name = $name;
        $this->credits = $credits;
        $this->pae = $pae;
    }

    public static function SelectAll()
    {
        $students =  \DB::select("select * from Student");
        $all = array();
        foreach($students as $student) {
            $id = $student->id;
            $courses =  \DB::select("select * from Program join Course on Program.course = Course.id where Program.student = :id",  ["id" => $id]);
            $credits = 0 ;
            foreach($courses as $course) {
                $credits += $course->credits;
            }
            array_push($all, new Student($student->id,$student->name,$credits,0));
        }
        return $all;
    }

    public static function Select($id)
    {
        $courses =  \DB::select("select * from Program join Course on Program.course = Course.id where Program.student = :id order by Program.course", ["id" => $id]);
        $pae = array();
        foreach($courses as $course) {
            array_push($pae, new Course($course->id,$course->title,$course->credits));
        }
        return new Student($id,0,0,$pae);
    }
}