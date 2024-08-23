<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentEmail;

class StudentController extends Controller
{
    public function studentInsert(Request $req) {

        $req->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'description' => ['required', 'min:10'],
            'machines' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'categories_id' => 'required'
        ]);

        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->description = $req->description;
        $student->machines = implode(',', $req->machines);
        $student->gender = $req->gender;
        $student->country = $req->country;
        $student->category_id = $req->categories_id;
        $student->save();
        return redirect('/');
    }

    public function listStudent() {
        $students = Student::with('category')->orderBy('id', 'desc')->get();
        return view('index', compact('students'));
    }

    public function deleteStudent($id) {
        $student = Student::destroy($id);
        return redirect('/');
    }

    public function viewStudent($id) {
        $student = Student::find($id);
        return view('view', compact('student'));
    }

    public function editStudent($id) {
        $student = Student::find($id);
        $categories = Category::get();
        return view('update', compact('student', 'categories'));
    }

    public function updateStudent(Request $req,$id) {
        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->description = $req->description;
        $student->machines = implode(',', $req->machines);
        $student->gender = $req->gender;
        $student->country = $req->country;
        $student->category_id = $req->categories_id;
        $student->save();
        return redirect('/');
    }

    public function searchStudent(Request $req) {
        $students = Student::where('name', 'like', "%$req->search%")->get();
        $name = $req->search;
        return view('index', compact('students', 'name'));
    }
}
