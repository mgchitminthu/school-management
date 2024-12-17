<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
// students route
Route::get("/students", [StudentController::class, "index"]);
Route::get("/students/add", [StudentController::class, "add"]);
Route::post("/students/add", [StudentController::class, "create"]);
Route::get("/students/show/{id}", [StudentController::class, "show"]);
Route::get("/students/edit/{id}", [StudentController::class, "edit"]);
Route::post("/students/edit/{id}", [StudentController::class, "update"]);
Route::get("/students/delete/{id}", [StudentController::class, "delete"]);

// teachers route
Route::get("/teachers", [TeacherController::class, "index"]);
Route::get("/teachers/add", [TeacherController::class, "add"]);
Route::post("/teachers/add", [TeacherController::class, "create"]);
Route::get("/teachers/show/{id}", [TeacherController::class, "show"]);
Route::get("/teachers/edit/{id}", [TeacherController::class, "edit"]);
Route::post("/teachers/edit/{id}", [TeacherController::class, "update"]);
Route::get("/teachers/delete/{id}", [TeacherController::class, "delete"]);

//courses route
Route::get("/courses", [CourseController::class, "index"]);
Route::get("/courses/add", [CourseController::class, "add"]);
Route::post("/courses/add", [CourseController::class, "create"]);
Route::get("/courses/show/{id}", [CourseController::class, "show"]);
Route::get("/courses/edit/{id}", [CourseController::class, "edit"]);
Route::post("/courses/edit/{id}", [CourseController::class, "update"]);
Route::get("/courses/delete/{id}", [CourseController::class, "delete"]);


//enrollments route
Route::get("/enrollments", [EnrollmentController::class, "index"]);
Route::get("/enrollments/add", [EnrollmentController::class, "add"]);
Route::post("/enrollments/add", [EnrollmentController::class, "create"]);
Route::get("/enrollments/show/{id}", [EnrollmentController::class, "show"]);
Route::get("/enrollments/edit/{id}", [EnrollmentController::class, "edit"]);
Route::post("/enrollments/edit/{id}", [EnrollmentController::class, "update"]);
Route::get("/enrollments/delete/{id}", [EnrollmentController::class, "delete"]);

//payments route
Route::get("/payments", [PaymentController::class, "index"]);
Route::get("/payments/add", [PaymentController::class, "add"]);
Route::post("/payments/add", [PaymentController::class, "create"]);
Route::get("/payments/show/{id}", [PaymentController::class, "show"]);
Route::get("/payments/edit/{id}", [PaymentController::class, "edit"]);
Route::post("/payments/edit/{id}", [PaymentController::class, "update"]);
Route::get("/payments/delete/{id}", [PaymentController::class, "delete"]);

// report route
Route::get("/report/{id}", [ReportController::class, "report1"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
