

@extends('layouts.app')
@section('content')





  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Recent Jobs
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{route('post.index')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">
      <a class=" float-right btn  btn-secondary" href="{{route('post.create')}}">create post</a></li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

@foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
          <!---<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--->
          <div class="card-body">
            <a href="post/{{$post->id}}"><h2 class="card-title">{{ucwords($post->title)}}</h2></a>
           <p class="card-text">{!!$post->body!!}</p>
            <a href="post/{{$post->id}}" class="btn btn-info">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
             {{date('l j.M.Y h:i:s a ',strtotime($post->created_at))}}
             author: <a href="#">{{ucwords($post->user->name)}}</a>   
          </div>
        </div>
       @endforeach
 








 
        <!-- Pagination -->
        {{$posts->links()}}

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        

        

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection