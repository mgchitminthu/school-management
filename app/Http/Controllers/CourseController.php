<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view("courses.index",[
            "courses"=> Course::all(),
        ]);
    }
    public function add()
    {
        return view("courses.add");
    }
    public function create()
    {
        $validator = validator(request()->all(),[
            "name"=> "required",
            "start_date"=> "required|date_format:Y-m-d",
            "duration"=> "required",
            "fee"=> "required",
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $course = new Course;
        $course->name = request()->name;
        $course->start_date = request()->start_date;
        $course->duration = request()->duration;
        $course->fee = request()->fee;
        $course->save();

        return redirect("/courses")->with("info", "No: {$course->id}-Add New Course {$course->name} Successfully");
    }
    public function show($id)
    {
        return view("courses.show", [
            "course"=> Course::find($id),
        ]);
    }
    public function edit($id)
    {
        return view("courses.edit",[
            "course"=> Course::find($id),
        ]);
    }
    public function update($id)
    {
        $validator = validator(request()->all(), [
            "name"=> "required",
            "start_date"=> "required|date_format:Y-m-d",
            "duration"=> "required",
            "fee"=> "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $course = Course::find($id);
        $course->name = request()->name;
        $course->start_date = request()->start_date;
        $course->duration = request()->duration;
        $course->fee = request()->fee;
        $course->save();

        return redirect("/courses/show/$id")->with("flash_message", "Edit Successfully");
    }
    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect("/courses")->with("flash_message", "No: {$course->id}-Course {$course->name} Delete!");
    }
}
