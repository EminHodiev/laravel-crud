<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
       return view('teachers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'speciality' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
        ]);
        Teacher::create($request->all());
        return redirect()->route('teacher.create')->with('message', 'Студент добавлен!');
    }
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'speciality' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
        ]);
       $teacher= Teacher::find($id);
       $teacher->update($request->all());
       return redirect()->route('teacher.index')->with('message2', 'Учитель изменил!');

    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with('message', 'Учитель удалён!');

    }
}
