<?php

namespace App\Http\Controllers;
use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Blog $blog){
      request()->validate([
      "comment"=>"required"
      ]);
       
      $blog->comments()->create([
      "body"=>request("comment"),
      "user_id"=>auth()->id()
      ]);

       //mail
      $subscribers = $blog->subscribers->filter(fn ($subscriber) => $subscriber->id != auth()->id());
      $subscribers->each(function ($subscriber)use ($blog){
      Mail::to($subscriber->email)->send(new SubscriberMail ($blog));
      });

    return redirect("/blogs/".$blog->slug);
  }
}
