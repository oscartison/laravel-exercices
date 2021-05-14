<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    function tasks($id = null)
    {
        if ($id == null) {
            $result = Student::SelectAll();
        } else {
            $result = Student::Select($id);
        }
        return response()->json($result); // ou json_encode($result)
    }

    public function index() {
        $students = Student::SelectAll();
        return view('index', compact('students'));
    } 
}
