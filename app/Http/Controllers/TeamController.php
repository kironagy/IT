<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.team' , compact('teams'));
    }

    public function getTeam()
    {
        $teams = Team::all();
        $img1 = Photo::where("id" , "LIKE" , 1)->first();
        $img2 = Photo::where("id" , "LIKE" , 2)->first();
        return view('pricing' , compact('teams' , 'img1' , 'img2'));

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
        $file = $request->file('img')->store('' , 'public');
        Team::create([
            "name"=> $request['name'],
            "description"=> $request['description'],
            "job"=> $request['job'],
            "facebook"=> $request['facebook'],
            "linkeding"=> $request['linkeding'],
            "message"=> $request['message'],
            "img"=> $file
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Team::where("id" , "LIKE" , $request['id'])->first()->delete();
        return redirect()->back();
    }
}
