<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;


class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        $students = Student::paginate(5);

        return view('index', ['students' => $students]);
    }

    public function filter()
    {
        $students = Student::where('score', '>=', 85)
            ->where('name', 'LIKE', '%a%')
            ->get();

        return view('filter', compact('students'));
    }

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

    public function create()
    {
        return view('create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'score' => 'required',
        ]);

        Student::create([
            'name' => $req->name,
            'score' => $req->score,
            'teacher_id' => 2
        ]);

        return Redirect::route('index');
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $req, Student $student)
    {
        $student->update([
            'name' => $req->name,
            'score' => $req->score,
        ]);

        return Redirect::route('index');
    }

    public function delete(Student $student)
    {
        $student->delete();

        return Redirect::route('index');
    }
}
