<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    $jobs = Job::with("employer")->latest()->cursorPaginate(3);

    return view("jobs.index", ["jobs" => $jobs]);
});

Route::get("/jobs/create", function () {
    return view("jobs.create");
});

Route::get("/jobs/{id}", function ($id) {

    return view("jobs.show", ["job" => Job::find($id)]);
});

Route::post("/jobs", function () {
    request()->validate([
        "title" => ["required", "min:3", "max:10"],
        "salary" => ["required", "min:4"]
    ]);
    Job::create([
        "title" => request("title"),
        "salary" => request("salary"),
        "employer_id" => 1
    ]);

    return redirect("jobs");
});

// apply on edit and delete
Route::get("/jobs/{id}/edit", function ($id) {

    $job = Job::find($id);
    return view("jobs.edit", ["job" => $job]);
});

Route::patch("/jobs/{id}", function ($id) {
    request()->validate([
        "title" => ["required", "min:3"],
        "salary" => ["required", "min:4"]
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        "title" => request("title"),
        "salary" => request("salary")
    ]);

    return redirect("jobs/" . $job->id);
});


Route::delete("/jobs/{id}/delete", function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect("/jobs");
});

Route::get("/contact", function () {
    return view("contact");
});
