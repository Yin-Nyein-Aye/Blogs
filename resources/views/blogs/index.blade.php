<x-layout>
    @if (session("success"))                            
        <div class="alert alert-success text-center">{{session("success")}}</div>
    @endif
    <x-hero />       
    <x-blog-section :blogs="$blogs" :noOfBlogs="$noOfBlogs"  :filterBlogs="$filterBlogs" />        
</x-layout>
     
