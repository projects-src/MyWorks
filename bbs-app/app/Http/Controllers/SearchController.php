<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class SearchController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->input('keyword');

        if(!empty($keyword)) {
            $posts = DB::table('posts')
                    ->where('name', 'like', '%'.keyword.'%')
                    ->paginate(4);
            $posts = Post::whereHas('comment', function ($query) use ($keyword)) {
                $query->where('comment', 'like', '%'.keyword.'%');
            })->paginate(4);
        }else{
            $posts = DB::table('posts')->paginate(4);
        }

        return view('search.index',[
            'posts' => $posts,
            'keyword' => $keyword,
            ]);
    }
}
