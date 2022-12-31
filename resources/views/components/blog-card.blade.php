@props(['blog'])
<div class="card">    
  <img src= '{{asset("storage/$blog->thumbnail")}}'
  class="card-img-top" width="500" height="250" alt="..." />

  <div class="card-body">      
    <span class="card-title h5">{{$blog->title}}</span>           
    <span class="fs-6 fst-italic text-secondary"> {{$blog->created_at->diffForHumans()}}</span>  
    <p class="card-text mt-3">{{$blog->intro}}</p> 

    <div class="tags my-3">        
      <a href="/?category={{$blog->category->slug}}{{request("authorName")?"&authorName=".request("authorName") : ""}}{{request("search")?"&search=".request("search"): ""}}">
        <span class="badge bg-warning text-dark mx-3 p-2">
          {{$blog->category->name}}
        </span>
      </a>
      <a href="/?authorName={{$blog->author->authorName}}{{request("search")?"&search=".request("search") : ""}}{{request("category")?"&category=".request("category"): ""}}">
        <span class="h6">{{$blog->author->authorName}}</span>  
      </a>
    </div>            
      <a href="/blogs/{{$blog->slug}}" class="btn btn-sm btn-info">Read More <i class="fa-solid fa-angles-right"></i></a>
  </div>
</div>