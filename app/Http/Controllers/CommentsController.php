<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
    public function addComment($request)
	{
		var_dump($request);die();
		// $this->createComment($request);
		Comment::create($request->all());
		return 1;
		
	}
}
