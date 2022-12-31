<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $with=["category","author"];   

    public function scopeFilter($query,$filter){       
        $query->when($filter["search"]??false,function($query,$search){         
            $query->where(function($query) use ($search){
                $query->where("title", "LIKE" , "%" .$search. "%")
                ->orWhere("body","LIKE" , "%" .$search. "%");
            });     
        });

        $query->when($filter["category"]??false,function($query,$slug){  
            $query->whereHas("category",function($query) use ($slug)
            {
                $query->where("slug",$slug);
            });         
        });

        $query->when($filter["authorName"]??false,function($query,$author){  
            $query->whereHas("author",function($query) use ($author)
            {
                $query->where("authorName",$author);
            });      
        });
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function category(){        
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function subscribers(){
        return $this->belongsToMany(User::class);
    }

    public function unSubscribe(){
        $this->subscribers()->detach(auth()->id());
    }

    public function subscribe(){
        $this->subscribers()->attach(auth()->id());
    }
}