<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get("/",[UploadController::class,'create']) ->name("post.create");
Route::post("store",[UploadController::class,'store'])->name("post.store");