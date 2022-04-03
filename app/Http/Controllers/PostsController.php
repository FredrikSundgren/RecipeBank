<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('/posts.index',
        [
            'posts'=>$posts, 'categories' => $categories
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $categories = Category::all();

        return view('posts.create',['posts'=> $posts,'categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'ingredients' => 'required',
        //     'cooking_time' => 'required|min:0|max:500',
        //     'images' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        // $newImageName = time() . '-' . $request->name . '.' . $test = $request->image->extension();

        // $test = $request->image->move(public_path('images'), $newImageName);
        // dd($test);

        $post = Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'ingredients'=>$request->input('ingredients'),
            'cooking_time'=>$request->input('cookingTime'),
            'images' => $request->input('image_path')

        ]);
        $post->categories()->attach($request->input('categories'));

        return redirect('/posts');
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
        $categories = Category::find($id);
        return view('posts.show')->with('post', $post, 'category', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('posts.edit',['post' => $post, 'categories' =>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Post::where('id', $id)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'ingredients' => $request->input('ingredients'),
            'cooking_time' => $request->input('cooking_time'),
        ]);
        $post = Post::find($id);

        $post->categories()->sync($request->input('categories'));
        return redirect('/posts');
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

        return redirect('/posts');
    }
}