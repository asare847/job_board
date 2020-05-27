@extends('layouts.app')

@section('content')

<div class="container">
{!! Form::open(['action' => ['PostController@update',$post->id],'method'=>'PUT']) !!}
    <div class="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title here'])}}
    </div>

     <div class="form-group" >
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body',$post->body,[ 'id'=>'editor1','class'=>'form-control','placeholder'=>'type something here'])}}
    </div>
    <div>
    	{{Form::submit('update',['class'=>'btn btn-success'])}}
    </div>

{!! Form::close() !!}
</div>
@endsection