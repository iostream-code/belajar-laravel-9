<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;


class StudentController extends Controller
{
    public function show($id)
    {
        $name = Student::find($id)->name;
        $addr = Student::find($id)->contact->address;
        $teacher = Student::find($id)->teacher->name;

        $students = Teacher::find($id)->students;

        $activity = Activity::find($id);
        $studentsAct = $activity->students;

        return view('home', [
            'name' => $name,
            'address' => $addr,
            'teacher' => $teacher,
            'students' => $students, 
            'activity' => $activity,
            'studentsAct' => $studentsAct
        ]);
    }
}
