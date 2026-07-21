<?php

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

Route::get("/courses", function () {
    return view("courses");
});

Route::get("/home", function () {
    // return view('welcome');
    return redirect("/");
});

Route::post("/save-course", function (Request $request) {
    // return $request;
    $course = new Course();
    $course->name = $request->course_name;
    $course->price= $request->price;
    $course->description = $request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Saved!');
    return redirect('/courses');
});
