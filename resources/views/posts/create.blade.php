@extends('layouts.app')
@section('content')

<div class="container">
{!! Form::open(['action' => 'PostController@store','method'=>'POST','class'=>'form-group']) !!}
    <div class="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title here'])}}
    </div>

     <div class='form-group'>
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body','',['id'=>'editor1','class'=>'form-control','placeholder'=>'type something here'])}}
    </div>
    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection
