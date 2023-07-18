<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $post = $request->post();

        $teacher = new Teacher();
        $teacher->name = $post['name'];
        $teacher->surname = $post['surname'];

        $teacher->save();

        return redirect("/teacher");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy([$id]);
        return redirect("/teacher");
    }
}
