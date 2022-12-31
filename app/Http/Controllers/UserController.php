<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function show(User $user){
        return view("user.profile",[
            "user"=>$user
        ]);
    }

    public function update(User $user){
        $formDate = request()->validate([
        "name"=>["required"],
        "username"=>["required",Rule::unique("users","username")->ignore($user->id)],
        "email"=>["required",Rule::unique("users","email")->ignore($user->id)]        
        ]);
                
        $formDate["avatar"] = request()->file("avatar")? request()->file("avatar")->store("avatar") : $user->avatar;
        $user->update($formDate);
        return back();
    }
}
