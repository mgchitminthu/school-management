<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view("teachers.index",[
            "teachers"=> Teacher::all(),
        ]);
    }
    
    public function add()
    {
        return view("teachers.add");
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

        $teacher = new Teacher;
        $teacher->name = request()->name;
        $teacher->address = request()->address;
        $teacher->phone = request()->phone;
        $teacher->save();

        return redirect("/teachers")->with("info", "No: {$teacher->id}-Add New Teacher {$teacher->name} Successfully");
    }
    public function show($id)
    {
        return view("teachers.show", [
            "teacher"=> Teacher::find($id),
        ]);
    }
    public function edit($id)
    {
        return view("teachers.edit",[
            "teacher"=> Teacher::find($id),
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

        $teacher = Teacher::find($id);
        $teacher->name = request()->name;
        $teacher->address = request()->address;
        $teacher->phone = request()->phone;
        $teacher->save();

        return redirect("/teachers/show/$id")->with("flash_message", "Edit Successfully");
    }
    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect("/teachers")->with("flash_message", "No: {$teacher->id}-Teacher {$teacher->name} Delete!");
    }
}
