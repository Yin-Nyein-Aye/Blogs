<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",[BlogController::class,"index"]);
Route::get("/blogs/{blog:slug}",[BlogController::class,"show"])->where("blog","[A-z\d\-_]+");
Route::post("/blogs/{blog:slug}/subscription",[BlogController::class,"subscriptionHandler"]);

Route::get("/register",[AuthController::class,"register"])->middleware("guest");
Route::post("/register",[AuthController::class,"store"])->middleware("guest");;
Route::get("/login",[AuthController::class,"login"])->middleware("guest");
Route::post("/login",[AuthController::class,"post_login"])->middleware("guest");
Route::post("/logout",[AuthController::class,"logout"])->middleware("auth");

Route::post("/blogs/{blog:slug}/comments",[CommentController::class,"store"]);

Route::get("/about/owner",[OwnerController::class,"index"]);

Route::get("/users/{user:id}/userinfo",[UserController::class,"show"]);
Route::patch("/users/{user:id}/userinfoupdate",[UserController::class,"update"]);


//Admin routes
Route::middleware("can:admin")->group(function(){
    Route::get("/admin/blogs",[AdminBlogController::class,"index"]);
    Route::get("/admin/blogs/create",[AdminBlogController::class,"create"]);
    Route::post("/admin/blogs/store",[AdminBlogController::class,"store"]);
    Route::delete("/admin/blogs/{blog:slug}/delete",[AdminBlogController::class,"destroy"]);
    Route::get("/admin/blogs/{blog:slug}/edit",[AdminBlogController::class,"edit"]);
    Route::patch("/admin/blogs/{blog:slug}/update",[AdminBlogController::class,"update"]);
    Route::get("/admin/authors/create",[AuthorController::class,"create"]);
    Route::post("/admin/authors/store",[AuthorController::class,"store"]);

});










