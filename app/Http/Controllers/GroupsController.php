<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\User;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Groups();
        $group->name = $request->group_name;
        $group->type = $request->group_type;
        $group->type = $request->group_type;
        $group->type = $request->group_type;
    }

    public function create_group()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show(groups $groups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit(groups $groups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groups $groups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(groups $groups)
    {
        //
    }
}
