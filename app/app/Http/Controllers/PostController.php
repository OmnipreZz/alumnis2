<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->where('category_id', 1)->orderBy('id', 'desc')->get();
        $categories = Category::orderBy('name')->get();
        $hisCategory = 1;
        return view('post.index', compact('posts', 'categories', 'hisCategory'));
    }

    public function indexByCat(Request $request)
    {
        $categories = Category::orderBy('name')->get();
        $posts = Post::with('category')->where('category_id', $request->input('category') )->orderBy('id', 'desc')->get();
        $hisCategory = $request->input('category');
        return view('post.index', compact('posts', 'categories', 'hisCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'img' => $request->input('img'),
            'author' => Auth::user()->firstname. " " .Auth::user()->lastname,
            'user_id' => Auth::user()->id,
            'category_id' => $request->input('category'),
        ]);

        return redirect()->route('post_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
