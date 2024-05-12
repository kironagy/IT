<?php

namespace App\Http\Controllers;

use App\Models\Galary;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imgs = Galary::all();

        return view('dashboard.galary.galary', \compact('imgs'));
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
        $file = $request->file('img')->store('', 'public');
        Galary::create([
            'img' => $file,
            'title' => $request['title'],
            'section' => $request['section'],
            'price' => $request['price'],
        ]);
        \session()->flash('success', 'Add Img Done');

        return \redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Galary $galary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galary $galary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galary $galary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $galary = Galary::where('id', 'LIKE', $request['id'])->first();
        if ($galary) {
            $galary->delete();
            \session()->flash('success', ' Delete Done');
        } else {
            \session()->flash('error', 'Error When Delete');
        }

        return \redirect()->back();
    }
}
