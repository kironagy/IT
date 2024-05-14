<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Category;
use App\Models\Galary;
use App\Models\Page;
use App\Models\Photo;
use ErrorException;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Page::all();

        return view('dashboard.customTextHome', \compact('contents'));
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
            'key',
        ]);
        Page::create([
            'key' => $request['key'],
            'content' => [
                'en' => 'Name in English',
                'ar' => 'عربي تجربه',
            ],
        ]);

        return 'Save Done';
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $categories = Category::all();
        $galaries = Galary::all();
        $blogs = blog::all()->where('isGalary', true);
        $img1 = Photo::where('id', 'LIKE', 1)->first();
        $img2 = Photo::where('id', 'LIKE', 2)->first();
        // return \json_decode($page);

        return view('index', \compact('categories', 'img1', 'img2', 'galaries', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        try {
            $page = Page::findOrFail($request->id)->first();
            $content = $page->content = $request['content'] ?? $page->content;
            $page->update([
                'content' => $content,
            ]);
            session()->flash('success', 'Save Successfully');

        } catch (ErrorException $error) {
            session()->flash('error', 'Error :'.$error->getMessage());
        }

        return \redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
