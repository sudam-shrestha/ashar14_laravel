<?php

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/about", function () {
    return view("about");
});

// Dynamic Route/ Route Parameter
// Route::get("/demo/{id}", function($idddd){
//     return "demo" . $idddd;
// });

// Courses Routes
Route::get("/courses", function () {
    $courses = Course::all();
    // return $courses;
    return view("course.index", compact('courses'));
});

Route::get("/course/create", function () {
    return view("course.create");
});

Route::post("/save-course", function (Request $request) {
    // return $request;
    $course = new Course();
    $course->name = $request->course_name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Course Created Successfully!');
    return redirect('/courses');
});

Route::delete("/course/delete/{id}", function ($id) {
    // return "delete" . $id;
    Course::find($id)->delete();
    SudamSweetAlert::toast('success', 'Course Deleted Successfully!');
    return redirect("/courses");
});


Route::get("/course/edit/{id}", function ($id) {
    // return "delete" . $id;
    $course = Course::find($id);
    return view("course.edit", compact('course'));
});


Route::patch("/course/update/{id}", function (Request $request, $id) {
    // return $request;
    // $course = new Course();
    $course = Course::find($id);
    $course->name = $request->course_name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Course Updated Successfully!');
    return redirect('/courses');
});


Route::get("/admission/index", function(){
    $admissions = Admission::all();
    return view('admission.index');
});


Route::get("/admission/create", function(){
    return view('admission.create');
});


Route::get("/admission/edit/{id}", function($id){
    return view('admission.edit');
});
