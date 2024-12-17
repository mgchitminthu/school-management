<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("students.index",[
            "students"=> Student::all(),
        ]);
    }

    public function add()
    {
        return view("students.add");
    }

    public function create()
    {
        $validator = validator(request()->all(),[
            "name"=> "required",
            "address"=> "required",
            "phone"=> "required",
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $student = new Student;
        $student->name = request()->name;
        $student->address = request()->address;
        $student->phone = request()->phone;
        $student->save();

        return redirect("/students")->with("info", "No: {$student->id}-Add New Student {$student->name} Successfully");
    }

    public function show($id)
    {
        return view("students.show", [
            "student"=> Student::find($id),
        ]);
    }

    public function edit($id)
    {
        return view("students.edit",[
            "student"=> Student::find($id),
        ]);
    }

    public function update($id)
    {
        $validator = validator(request()->all(), [
            "name"=> "required",
            "address"=> "required",
            "phone"=> "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $student = Student::find($id);
        $student->name = request()->name;
        $student->address = request()->address;
        $student->phone = request()->phone;
        $student->save();

        return redirect("/students/show/$id")->with("flash_message", "Edit Successfully");
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect("/students")->with("flash_message", "No: {$student->id}-Student {$student->name} Delete!");
    }
}
