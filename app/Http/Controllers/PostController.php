<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allposts = Post::all();
        return view('posts.index', compact('allposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        (['picture'=> 'url']);

        $data = $request->all();

        $post = new Post();
        $postExtraDetails = new PostExtraDetails ();

        $this->updatePost($post, $postExtraDetails, $data);

        return redirect()->route('posts.single', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $this->updatePost($post, $data);

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index');
    }

    private function updatePost(Post $post, $postExtraDetails, $data) {

        $postExtraDetails->location = $data ['location'];
        $postExtraDetails->edit = $data ['edit'];
        $postExtraDetails->save();

        $post->picture = $data['picture'];
        $post->description = $data['description'];
        $post->accountName = $data['accountName'];
        $post->accountPfp = $data['accountPfp'];
        $post->date = $data['date'];
        $post->post_extra_detail_id = $postExtraDetails->id;
        $post->category_id = $data['category_id'];
        $post->save();
    }
}
