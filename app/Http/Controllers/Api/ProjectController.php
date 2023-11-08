<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Typology;
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
        $projects = Project::select('id', 'typology_id', 'name', 'repo', 'collaborators', 'publishing_date')
            ->with('typology:id,color,name')
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
            ->with('typology:id,color,name')
            ->first();


        return response()->json($projects);
    }

    public function projectsByTypology($typology_id)
    {
        $projects = Project::select("id", "typology_id", "name", "repo", "collaborators", "publishing_date")
            ->where("typology_id", $typology_id);
        // ->with('typology:id,name,color');

        return response()->json($projects);

    }
}