<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Validator;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('post/index', [
            'posts' => $posts,
        ]);
    }

    public function show($sport)
    {
        $sports = Post::where('sport', $sport)->paginate(8);
        return view('post/show', [
            'sports' => $sports,
        ]);
    }

    public function new()
    {
        return view('post/new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),['caption' => 'required|max:255','place' => 'required|max:255']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $post = new Post;
        $post->sport = $request->sport;
        $post->caption = $request->caption;
        $post->user_id = Auth::user()->id;
        $post->place = $request->place;
        $post->cost = $request->cost;

        $post->save();
        
        return redirect('/home');
    }

}
