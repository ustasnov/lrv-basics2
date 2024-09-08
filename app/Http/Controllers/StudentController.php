<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
    public function create(string $id)
    {
        return view('student.create', [
            'group' => Group::find($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $group_id)
    {
        $validated = $request->validate([
            'surname' => 'required',
            'name' => 'required'
        ]);
        
        $student = new Student;

        $student->group_id = $group_id;
        $student->surname = $request->surname;
        $student->name = $request->name;
        $student->save();

        return redirect('/groups/' . $group_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $group_id, string $id)
    {
        $group = Group::find($group_id);
        $student = Student::find($id);

        return view('student.item', [
            'group' => $group,
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
