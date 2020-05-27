@extends('layouts.app')
@section('content')





 <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{$post->title}}
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('post.index')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">{{$post->title}}</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">


          <hr>

          <!-- Date/Time -->
          <p>{{date('l j M Y h:i:s a ',strtotime($post->created_at))}} by :{{ucwords($post->user->name)}}</p>

          <hr>

          <!-- Post Content -->
          <p class="lead">{!! $post->body!!}</p>

          
         
      <div class="row">
       <div class="media mb-12">
			@if(!Auth::guest())
			@if(Auth::user()->id==$post->user_id)
			<p><a class="btn btn-warning  float-left" href="{{$post->id}}/edit">Update</a>
				{!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'DELETE']) !!}
			    	{{Form::submit('Delete',['class'=>'btn float-right btn-danger'])}}
			{!! Form::close() !!}
			</p>
			@endif
			@endif
			</div>
      </div>

         
          
            
          
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection