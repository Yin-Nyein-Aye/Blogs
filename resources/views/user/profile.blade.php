<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="my-3 text-center">{{$user->name}} Profile</h3>
                <x-card-wrapper>
                    <form enctype="multipart/form-data" action="/users/{{$user->id}}/userinfoupdate" method="POST">
                        @csrf
                        @method("patch")
                        <x-forms.input name="name" value="{{$user->name}}" />
                        <x-forms.input name="username" value="{{$user->username}}" />
                        <x-forms.input name="email" value="{{$user->email}}" />                       
                         
                        <div class="mb-3">
                            <label for="admin">Admin</label>
                            <label for="notadmin" class="mx-3">Not Admin</label><br />
                            @if ($user->is_admin)
                                <input type="radio" class="mx-3" id="admin" name="admin" checked> 
                                <input type="radio" class="mx-5" id="notadmin" name="notadmin" disabled >
                            @else
                                <input type="radio" class="mx-3" id="admin" name="admin" disabled > 
                                <input type="radio" class="mx-5" id="notadmin" name="notadmin" checked >
                            @endif                                                  
                        </div>
                        <x-forms.input name="avatar" type="file" />
                        <img src="/storage/{{auth()->user()->avatar}}" alt="" width="100" height="100"> 
                        
                        <div class="my-3">
                            <button type="submit" class="btn btn-outline-secondary form-control">Submit</button>
                        </div>
                    </form>              
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout> 