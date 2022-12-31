<?php

namespace App\Http\Controllers;
use App\Models\Author;

class AuthorController extends Controller
{
    public function create(){
        return view("admin.create");
    }

    public function store(){
    $formData = request()->validate([
        "authorName"=>["required"],
        "career"=>["required"]
        ]);    
        Author::create($formData);
        return back();
    }     
}
