<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showComments($user_id)
    {
        $comments = Comment::where('user_id', $user_id)->paginate(5);
        $user = User::findOrFail($user_id);
        return view('user.showComments', compact('user', 'comments'));
    }
    public function profile($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('user.profile', compact('user'));
    }
}
