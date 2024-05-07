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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        try {
            if ($blog->delete()) {
                session()->flash('success', 'Blog deleted successfully');
            } else {
                session()->flash('error', 'Failed to delete the blog');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to delete the blog: ' . $e->getMessage());
        }
        return redirect()->route('admin.blogs');
    }
}
