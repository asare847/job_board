@include('inc.messages')
@foreach($posts as $post)
<div><a href="post/{{$post->id}}">{{$post->title}}</a></div>
 <small>{{date('l j M Y h:i:s a ',strtotime($post->created_at))}}</small>
 <small>posted by {{$post->users->name}}</small>
@endforeach