@props(['threecomments'])
<section class="container">
    <div class="col-md-8 mt-3 mx-auto"> 
        @foreach ($threecomments as $comment)      
        <x-single-comment :comment="$comment" />
        @endforeach          
        {{$threecomments->links()}}
    </div>
</section>