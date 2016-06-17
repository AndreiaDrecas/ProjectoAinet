<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Advertisement;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\User;
use App\Comment;


class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    public function index()
    {
        //return \Auth::user();

        $comments = Comment::latest('available_on')->available()->get();     
        return view('comments.list', compact('comments'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('comments.add', compact('tags'));
    }

    public function store(CommentRequest $request)
    {    
        $comment = new Comment($request->all());
        $comment->user_id = Auth::user()->id;
        var_dump($comment->advertisement_id);
        $advertisement = Advertisement::findOrFail($comment->advertisement_id);
        
        $advertisement->comments()->save($comment);

        \Session::flash('flash_message', 'Your comment has been created!');

        return back();
    }


    public function show(Comment $comment)
    {      
        $user = Comment::findorfail($comment->user_id);
        return view('comments.list',compact('comment', 'user'));
    }

    public function edit(Comment $comment)
    {
        $tags = Tag::lists('name', 'id');
        return view('comments.edit', compact('comment','tags'));
    }

    public function update(Comment $comment, CommentRequest $request)
    {
        $comment->update($request->all());
        return redirect('advertisements');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('advertisements');
    }
}
