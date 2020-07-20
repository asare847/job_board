<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravelista\Comments\Commentable;
use App\Post;

class Post extends Model
{
   const EXCERPT_LENGTH = 250;
	use Commentable;
    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function excerpt(){
        return Str::limit($this->body,Post::EXCERPT_LENGTH);
    }
}
 