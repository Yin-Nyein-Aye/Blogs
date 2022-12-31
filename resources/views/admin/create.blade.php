<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <img class="d-block mt-3 mx-auto" src="/images/webdeveloper.jpg"  alt="" width="250">
                <h3 class="mt-2 text-center">Author Information</h3>
                <x-card-wrapper>
                    <form action="/admin/authors/store" method="POST">
                        @csrf                       
                        <x-forms.input name="authorName" />
                        <x-forms.input name="career" />
                       
                        <div class="my-3">
                            <button type="submit" class="btn btn-outline-secondary form-control">Submit</button>
                        </div>
                    </form>              
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout> 