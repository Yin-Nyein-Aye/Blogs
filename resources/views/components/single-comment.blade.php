@props(['comment'])
<div>
    <img src="/storage/{{$comment->user->avatar}}" alt="" width="40" height="40" class="rounded-circle" >
    <span class="h6">{{$comment->user->name}}</span>
</div>   

<div class="comment mx-5">      
    <p>{{$comment->body}}</p>
</div> 
    
<p class="cmt mx-5 text-secondary fst-italic">{{$comment->created_at->diffForHumans()}}</p>
    
