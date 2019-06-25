@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
       {{$error}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
  @endforeach
@endif

@if (Session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{Session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (Session('error'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">

    {{Session('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
