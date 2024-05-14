<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('dashboard.category', \compact('categories'));
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
        $request->validate([
            'title', 'description', 'img',
        ]);
        $file = $request->file('img')->store('', 'public');
        Category::create([
            'title' => [
                config('app.locale') => $request['title'],
            ],
            'description' => $request['description'],
            'img_path' => $file,
        ]);
        session()->flash('success', 'Save Done');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::findOrFail($request->input('id'));

        // Retrieve the current title data
        $title = $category->title = $request['title'] ?? $category->title;
        $description = $category->description = $request['description'] ?? $category->description;

        // Update the title in the database
        $category->update([
            'title' => $title,
            'description' => $description,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Category::where('id', 'LIKE', $request['id'])->first()->delete();

        return \redirect()->back();
    }
}
