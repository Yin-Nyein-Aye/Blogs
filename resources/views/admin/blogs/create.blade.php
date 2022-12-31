<x-admin-layout>
    <h3 class="my-3 text-center">Blog Create Form</h3>
        <x-card-wrapper>
            <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
                @csrf
                <x-forms.input name="title" />            

                <div class="mb-3">                
                    <x-forms.label name="authorName" />
                    <select name="author_id" id="authorName" class="form-control">
                        @foreach ($authors as $author)
                        <option {{$author->id == old("author_id") ? "selected" : " "}} value="{{$author->id}}">{{$author->authorName}}</option>
                        @endforeach
                    </select>
                    <x-error name="author_id" />                
                </div>

                <x-forms.input name="slug" />
                <x-forms.input name="intro" />                
                <x-forms.textarea name="body" />  
                <x-forms.input name="thumbnail"  type="file" />           
                            
                <div class="mb-3">
                    <x-forms.label name="category" />
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                        <option {{$category->id == old("category_id") ? "selected" : " "}} value="{{$category->id}}">{{$category->name}}</option>
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


