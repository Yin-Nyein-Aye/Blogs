<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    function index(){    
        $filterBlogs= Blog::latest()
                        ->filter(request(["search","category","authorName"]));       
        return view("blogs.index",[  
        "noOfBlogs"=>Blog::all(),  
        "filterBlogs"=>$filterBlogs->get(),        
        "blogs"=>$filterBlogs->paginate(6)->withQueryString()
                  
        ]);
    }

    function show(Blog $blog){   
        return view("blogs.show",[
            "oneblog" => $blog,
            "randomBlogs"=>Blog::inRandomOrder()->take(3)->get()
        ]);          
    }

   public function subscriptionHandler(Blog $blog){         
        if(User::find(auth()->id())->isSubscribed($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }
            return back();
   }   
}
