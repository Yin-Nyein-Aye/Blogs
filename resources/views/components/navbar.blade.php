<nav class="navbar navbar-dark bg-dark">
  <img src="/images/blogger.jpg" alt="" width="50" height="50" class="mx-auto"/>
    <div class="container">   
      <a class="navbar-brand" href="/">Created By Nyein</a>     
      <div class="d-flex">    
        @guest
          <a href="/register" class="nav-link link-light">Register</a>
          <a href="/login" class="nav-link link-light">Login</a>
        @else          
          <img src="/storage/{{auth()->user()->avatar}}" alt="" width="40" height="40" class="rounded-circle" >
          <a href="/users/{{auth()->id()}}/userinfo" class="nav-link link-light">{{auth()->user()->name}}</a> 
          @can('admin')
            <a href="/admin/blogs" class="nav-link link-light">Dashboard</a>
          @endcan
        @endguest      

        @if (auth()->check())
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" href="/logout" class="nav-link btn btn-link link-light">Logout</button>
          </form>       
        @endif        

        <a href="/" class="nav-link link-light">Home</a>
        <a href="/#blogs" class="nav-link link-light">Blogs</a>        
      </div>
    </div>
</nav>