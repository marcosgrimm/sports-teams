<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return response()->json(["teams"=>$teams], 200);
    }

    public function show($id)
    {
        $team = Team::find($id);

        return response()->json(["team"=>$team], 200);
    }

    public function update($id)
    {

    }
    public function store(Request $request)
    {
        $team = Team::create($request);

        return response()->json(['team'=>$team],200);
    }

    public function destroy($id)
    {

    }
}
