@props(['oneblog'])
<x-card-wrapper >
  <form action="/blogs/{{$oneblog->slug}}/comments" method="POST">
    @csrf
    <div class="mb-3">              
      <textarea name="comment" id="" cols="10" rows="5" class="form-control border border-0" placeholder="Say something..."></textarea>
      <x-error name="comment" />
    </div> 

    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
    </div>
  </form>
</x-card-wrapper>