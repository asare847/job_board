<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use App\Post;

class Post extends Model
{

	use Commentable;
    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
 