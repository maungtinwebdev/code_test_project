<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        // dd($students);
        return view('student.index',compact('students'));
    }

    public function add() {
        return view('student.add');
    }

    public function create(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->grade = $request->grade;
        $student->phone_number = $request->phone_number;
        $student->address = $request->address;
        $student->save();
        return redirect('/')->with('info','Student Created!');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Student $student, Request $request) {

        // $student = Student::find($id);
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->grade = $request->grade;
        $student->phone_number = $request->phone_number;
        $student->address = $request->address;
        $student->update();
        dd($request);
        return redirect('/')->with('info','Updated!');

    }

    public function delete($id) {
        $data = Student::find($id);
        $data->delete();
        return redirect('/')->with('info','A stundent record is deleted');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $students = Student::where('name', 'like', "%{$query}%")
            // ->orWhere('grade', 'like', "%{$query}%")
            ->orWhere('phone_number', 'like', "%{$query}%")
            ->orWhere('address', 'like', "%{$query}%")
            ->get();

        return view('student.index', compact('students'));
    }
}
