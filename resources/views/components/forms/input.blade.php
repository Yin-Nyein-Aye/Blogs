@props(['name' , "type" => "text" , "value"=>""])
<x-forms.input-wrapper>
    <x-forms.label :name="$name" />    
    <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" value="{{old($name,$value)}}" >
    <x-error :name="$name" /> 
</x-forms.input-wrapper>


