<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index()
    {
        $posts = $this->post->all();
        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('blog.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {

            $this->post->create($request->input());
            return back()->with('success', 'Created post success !');
        } catch (\Throwable $th) {

            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $this->post->findOrFail($id);
        // return view('')
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = $this->post->findOrFail($id);

        return view('blog.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $post = $this->post->findOrFail($id); // Tìm bài viết theo ID
            $post->update($request->input());     // Cập nhật bài viết

            return redirect()->route('blog.index')->with('status', 'Cập nhật thành công!');
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->post->destroy($id);
        return redirect()->route('blog.index');

    }
}