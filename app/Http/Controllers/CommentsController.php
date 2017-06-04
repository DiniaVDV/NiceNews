<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Carbon;

class CommentsController extends Controller
{
    public function store()
	{
        $categoryName = $_GET['categoryName'];

        $articleId = $_GET['articleId'];
        $comment = new Comment;
        $comment->message = $_GET['comment'];
        $comment->user_id = $_GET['userId'];
		if ($categoryName == 'politics'){
            $comment->status = 'check';
        }else{
            $comment->status = 'published';
        }
        $comment->save();
        $comment->articles()->attach($articleId);
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
