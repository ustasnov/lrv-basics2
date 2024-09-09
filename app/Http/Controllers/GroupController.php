<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Stident;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('group.index', [
            'title' => "Группы:", 
            'groups' => Group::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'title' => 'required',
            'start_from' => 'required',
        ]);
        
        $group = new Group;

        $group->title = $request->title;
        $group->start_from = $request->start_from;
        //$group->is_active = empty($request->is_active) ? false : $request->is_active;
        $group->is_active = !empty($request->is_active);

        $group->save();

        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::find($id);
        $students = $group->students;

        return view('group.item', [
            'group' => $group,
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
