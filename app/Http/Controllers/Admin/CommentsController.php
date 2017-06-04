<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Comment;

class CommentsController extends Controller
{

    public function index()
    {

        $comments = Comment::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.comments.show', compact('comments'));
    }
    public function showCheckComments()
    {
        $comments = Comment::where('status', 'check')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.comments.showCheckComments', compact('comments'));
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $user = Comment::find($id)->user()->get();
        $article = Comment::find($id)->articles()->get();
        return view('admin.comments.edit', compact('comment', 'user', 'article'));
    }

    public function update($id, CommentsRequest $request)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return redirect('admin_panel/comments')->with('message', 'Комментарий обновлен.');
    }

    public function delete($id)
    {
        Comment::findOrFail($id)->articles()->detach();
        Comment::findOrFail($id)->delete();

        return redirect('admin_panel/comments')->with('message', 'Комменарий удален.');
    }
    public function checked($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->status = 'published';
        $comment->update();
        return $this->showCheckComments();
    }



}
