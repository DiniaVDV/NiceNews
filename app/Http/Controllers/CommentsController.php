<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Carbon;

class CommentsController extends Controller
{
    public function store()
	{
		$article_id = $_GET['article_id'];

		$comment = new Comment;
		$comment->message = $_GET['comment'];
		$comment->user_id = $_GET['user_id'];
		$comment->save();
		$comment->articles()->attach($article_id);
		return $comment;
	}
	
	public function countLikes()
	{
		$id = $_GET['comment_id'];
		$comment = Comment::find($id );

		$comment->like += 1;
		$comment->save();
	}
}
