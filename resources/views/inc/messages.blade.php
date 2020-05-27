@if(count($errors))
@foreach($errors->all() as $error)
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		<strong>{{$error}}</strong> 
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   		 <span aria-hidden="true">&times;</span>
 		 </button>
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success">{{session('success')}}
<span aria-hidden="true">&times;</span></div>
@endif

@if(session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('error')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif