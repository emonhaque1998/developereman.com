<?php

use App\Http\Controllers\FileController;
use App\Livewire\About;
use App\Livewire\Blogs;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Project;
use App\Livewire\Service;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class);
Route::get("/about", About::class);
Route::get("/service", Service::class);
Route::get("/project", Project::class);
Route::get("/blogs", Blogs::class);
Route::get("/contact", Contact::class);

Route::get('/download/upload/{file}', [FileController::class, "download"]);
