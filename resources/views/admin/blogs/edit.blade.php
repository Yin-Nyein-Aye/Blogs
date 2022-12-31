<x-admin-layout>
    <h3 class="my-3 text-center">Blog Edit Form</h3>
        <x-card-wrapper>
            <form enctype="multipart/form-data" action="/admin/blogs/{{$blog->slug}}/update" method="POST">
                @csrf
                @method("patch")
                <x-forms.input name="title" value="{{$blog->title}}" />
                
                <x-forms.input-wrapper>                
                    <label for="author_id" class="fw-bold">Author ID</label>
                    <input type="text" name="author_id" value="{{$blog->author->id}}" class="form-control" >        
                    <x-error name="author_id" />        
                </x-forms.input-wrapper>

                <x-forms.input name="slug" value="{{$blog->slug}}" />
                <x-forms.input name="intro" value="{{$blog->intro}}" />                
                <x-forms.textarea name="body" value="{{$blog->body}}" />  
                <x-forms.input name="thumbnail"  type="file" />  
                <img src='{{asset("storage/$blog->thumbnail")}}' alt="" width="50" height="50">         
                                
                <div>
                    <x-forms.label name="category" />
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                        <option {{$category->id == old("category_id",$blog->category->id) ? "selected" : " "}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <x-error name="category_id" />
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-outline-secondary form-control">Submit</button>
                </div>
            </form>
        </x-card-wrapper>   
</x-admin-layout>


