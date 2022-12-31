<x-layout>   
    <div class="container">
        <div class="row">              
            <div class="col-md-2 mt-3">                    
                <div class="list-group mt-5">                                              
                    <a href="/admin/blogs" class="list-group-item list-group-item-action list-group-item-warning"><i class="fa-solid fa-table-cells mx-2"></i> Dashboard</a>
                    <a href="/admin/blogs/create" class="list-group-item list-group-item-action list-group-item-warning"><i class="fa-solid fa-circle-plus mx-2"></i> Create Blog</a>
                    <a href="/admin/authors/create" class="list-group-item list-group-item-action list-group-item-warning"><i class="fa-solid fa-user-plus mx-2"></i> Add Author </a>
                </div>                  
            </div>
            <div class="col-md-10">
                {{$slot}}
            </div>
        </div>
    </div>    
</x-layout>  