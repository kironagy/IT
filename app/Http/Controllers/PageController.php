<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
        $page = Page::all();

        // return \json_decode($page);

        return view('index', \compact('page'));
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
            $content = [
                'en' => $request['English'],
                'ar' => $request['Italian'],
                'fr' => $request['French'],
                'it' => $request['German'],
            ];
            Page::where('id', 'LIKE', $request->id)->first()->update([
                'content' => $content,
            ]);
            session()->flash('success', 'Save Successfully');

            return \redirect()->back();
        } catch (ErrorException $error) {
            session()->flash('error', 'Error :'.$error->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
