@props(['blogs','noOfBlogs','filterBlogs'])
<section class="container text-center" id="blogs">
  <h1 class="display-5 fw-bold mb-4">Blogs</h1>
  <span class="h5 text-secondary mx-3">Total Blogs</span>
  <span class="h5 text-secondary mx-3">Filtered Blogs</span>
  <div>
    <span class="blogCount">{{$noOfBlogs->count()}}</span>
    <span class="blogCount">{{$filterBlogs->count()}}</span>
  </div>
  <div class="mt-5">
    <x-category-dropdown />      
  </div>

  <form action="/" class="my-3">
    <div class="input-group">         
      @if (request("authorName"))
        <input name="authorName" type="hidden"  value="{{request("authorName")}}" />
      @endif
        
      @if (request("category"))
        <input name="category" type="hidden"  value="{{request("category")}}" />
      @endif   
        
      <input name="search" type="text"  value="{{request("search")}}" autocomplete="false" class="form-control" placeholder="Search" />    

      <button class="input-group-text bg-info text-dark" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
    </div>
  </form>

  <div class="row">
    @forelse ($blogs  as $blog)      
      <div class="col-md-4 mb-4">
          <x-blog-card :blog="$blog" />
      </div>
    @empty
      <div class="text-center text-dark fw-bold display-6">Opps...Blog Not Found!</div>
    @endforelse
      {{$blogs->links()}}      
  </div>
</section>