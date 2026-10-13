<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("project");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $projectdata = $request->validate([
            "title" => "required | alpha",
            "url" => "required | alpha",
            "teach_used" => "required | alpha",
            "description" => "required | alpha"
        ]);
    Product::create( $projectdata );
    echo "save project data";
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
