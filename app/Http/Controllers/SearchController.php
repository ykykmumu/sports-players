<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class SearchController extends Controller
{
    public function getIndex(Request $request)
    {
        $keyword = $request->input('keyword');
        if(!empty($keyword))
        {
            $posts = DB::table('posts')
            ->where('caption', 'like', '%'.$keyword.'%')
            ->paginate(8);
        }else
        {
            $posts = DB::table('posts')->paginate(4);
        }

        return view('post.show', compact('posts','keyword'));
    }
}
