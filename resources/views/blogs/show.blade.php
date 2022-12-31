<x-layout>    
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="text-center">
          <img src= '{{asset("storage/$oneblog->thumbnail")}}' class="card-img-top my-3" height="300" alt="..." />      
         
          <span class="h2">{{$oneblog->title}}</span>           
          <span class="fs-6 fst-italic text-secondary"> {{$oneblog->created_at->diffForHumans()}}</span>
  
          <div>
            <a href="">
              <span class="badge bg-warning text-dark my-3 px-3 py-2">
                {{$oneblog->category->name}}
              </span>
            </a>
          </div>
  
          <div>
            <form action="/blogs/{{$oneblog->slug}}/subscription" method="POST">
              @csrf
              @auth
              @if (auth()->user()->isSubscribed($oneblog))
                <button class="btn btn-sm btn-outline-danger text-dark"><i class="fa-solid fa-bell"></i> Unsubscribe</button>
              @else
                <button class="btn btn-sm btn-outline-success text-dark">Subscribe</button>
              @endif    
              @endauth      
            </form>
          </div>                 
  
          <div class="my-3 fst-italic text-secondary">
            <i class="fa-solid fa-user mx-2"></i>{{$oneblog->author->authorName}}
          </div>
  
          <p class="lh-md mt-3">
            {!!$oneblog->body!!}
          </p>
        </div>         

        <div class="mt-5 mb-2 px-3">
          @if ($oneblog->comments->count())
            <span class="text-secondary">
              <i class="fa-regular fa-comment-dots"></i>        
              {{$oneblog->comments->count()}} Comments
            </span>
          @endif
        </div>
      </div>
    </div>
  </div>
    
  <section class="container">
    <div class="col-md-8 mx-auto">       
      @auth
        <x-comment-form :oneblog="$oneblog" />
      @else
        <p class="text-center text-dark fw-bold fw-italic fst-italic"> Please login to participate in this discussion.
        <a class="btn btn-sm btn-secondary" href="/login" role="button">Login</a></p>
      @endauth                  
    </div>      
  </section>   
  @if ($oneblog->comments->count())
    <x-comments :threecomments="$oneblog->comments()->latest()->paginate(3)" />
  @endif    
  <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />  
</x-layout>
