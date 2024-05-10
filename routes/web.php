<?php

use App\Http\Controllers\FileController;
use App\Livewire\About;
use App\Livewire\Blogs;
use App\Livewire\CategoryProject;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Project;
use App\Livewire\ProjectDetails;
use App\Livewire\Service;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class)->name("home");
Route::get("/about", About::class);
Route::get("/service", Service::class);
Route::get("/project", Project::class)->name("project");
Route::get("/project-details/{slug}", ProjectDetails::class);
Route::get("/project/category/{slug}", CategoryProject::class);
Route::get("/blogs", Blogs::class);
Route::get("/contact", Contact::class);

Route::get('/download/upload/{file}', [FileController::class, "download"]);
