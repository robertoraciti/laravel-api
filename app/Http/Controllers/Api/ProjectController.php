<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::select('id', 'typology_id', 'name', 'repo')
            ->paginate(9);

        return response()->json($projects);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Project::select('id', 'typology_id', 'name', 'repo', 'collaborators', 'publishing_date')
            ->where('id', $id)
            ->first();


        return response()->json($projects);
    }
}