@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">Dashboard
                    <button type="button" class="btn btn-primary float-right">
                        Total Post <span class="badge badge-light">{{count($posts)}}</span>
                        <span class="sr-only"></span>
                    </button> 
                    <a type="button" class="btn btn-secondary float-right" style="margin-right:10px" href="{{route('post.create')}}">
                       Create Post
                    </a>    
                 </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                               
                        <table>
                            @if(count($posts)>0)

                                @foreach($posts as $post)
                                   <tr><td><a href="post/{{$post->id}}">{{$post->title}}</a></td>
                                     
                                       <td><a class="btn btn-warning float-right" href="post/{{$post->id}}/edit">Edit</a></td>
                                      <td>
                                        <td>
                                        {!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'DELETE']) !!}
                                         {{Form::submit('Delete',['class'=>' btn float-right btn-danger'])}}
                                        {!! Form::close() !!} 
                                        </td> 
                                     </tr>
                                       
                                   
                                   
                                @endforeach
                            @endif
                        </table>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
