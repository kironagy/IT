<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();

        return view('dashboard.blogs.blogs', compact('blogs'));
    }

    public function getBlogs()
    {
        $blogs = blog::all();

        return view('blog', compact('blogs'));
    }

    public function getBlog($id)
    {
        $blog = blog::where('id', 'LIKE', $id)->first();

        return view('blog_details', \compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'required|image',
        ]);

        $file = $request->file('img')->store('blog_images', 'public');

        $blog = blog::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'img' => $file,
            'content' => $request['editordata'],
            'created_by' => Auth::user()->name,
        ]);

        if ($blog->save()) {
            session()->flash('success', 'Blog saved successfully');
        } else {
            session()->flash('error', 'Failed to save the blog');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        blog::where('id', 'LIKE', $request['id'])->first()->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['editordata'],
        ]);
        \session()->flash('success', 'Edit Done');

        return \redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        blog::where('id', 'LIKE', $request['id'])->first()->delete();
        session()->flash('success', 'Blog deleted successfully');

        return redirect()->route('admin.blogs');
    }
}
