<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        return view("enrollments.index",[
            "enrollments"=> Enrollment::all(),
        ]);
    }
    
    public function add()
    {
        return view("enrollments.add", [
            "students"=> Student::all(),
            "courses"=> Course::all(),
        ]);
    }

    public function create()
    {
        $validator = validator(request()->all(),[
            "student_id"=> "required",
            "course_id"=> "required",
            "join_date"=> "required|date_format:Y-m-d",
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $enrollment = new Enrollment;
        $enrollment->student_id = request()->student_id;
        $enrollment->course_id = request()->course_id;
        $enrollment->join_date = request()->join_date;
        $enrollment->save();

        return redirect("/enrollments")->with("info", "No: {$enrollment->id}-Add New Enrollment {$enrollment->student->name} Successfully");
    }

    public function show($id)
    {
        return view("enrollments.show", [
            "enrollment"=> Enrollment::find($id),
        ]);
    }

    public function edit($id)
    {
        return view("enrollments.edit",[
            "enrollment"=> Enrollment::find($id),
            "students"=> Student::all(),
            "courses"=> Course::all(),
        ]);
    }

    public function update($id)
    {
        $validator = validator(request()->all(), [
            "student_id"=> "required",
            "course_id"=> "required",
            "join_date"=> "required|date_format:Y-m-d",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $enrollment = Enrollment::find($id);
        $enrollment->student_id = request()->student_id;
        $enrollment->course_id = request()->course_id;
        $enrollment->join_date = request()->join_date;
        $enrollment->save();

        return redirect("/enrollments/show/$id")->with("flash_message", "Edit Successfully");
    }

    public function delete($id)
    {
        $enrollment = Enrollment::find($id);
        $enrollment->delete();
        return redirect("/enrollments")->with("flash_message", "No: {$enrollment->id}-Enrollment {$enrollment->student->name} Delete!");
    }
}
