<div class="dropdown mb-4">
  <button class="btn btn-outline-info dropdown-toggle text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      {{isset($currentCategory) ? $currentCategory->name : "Filter By Category";}}     
  </button>              
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/">All</a></li>
    @foreach ($categories  as $category)
      <li><a class="dropdown-item" href="/?category={{$category->slug}}{{request("search")?"&search=".request("search") : ""}}{{request("authorName")?"&authorName=".request("authorName") : ""}}">{{$category->name}}</a></li>  
    @endforeach     
  </ul>       
</div>