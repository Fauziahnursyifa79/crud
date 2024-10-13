<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Nette\Utils\Strings;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('siswa');
        $student = Student::orderBy('name','asc')->get(); // Mengambil semua data post
        // return $student; ini untuk mengecek tabel data
        return view('student', compact('student')); // Mengirim data ke view

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required|min:3|max:200',
            'nisn' => 'required|numeric',
            'school' => 'required',
            'classroom' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'no_hp' => 'required|numeric',

        ]);


        $insert = Student::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'school' => $request->school,
            'classroom' => $request->classroom,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('student_index')->with('status', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return $id;
        $student = Student::findOrFail($id);
        // return $student;
        return view('student.edit', compact('student'));
        // return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:200',
            'nisn' => 'required|numeric',
            'school' => 'required',
            'classroom' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'no_hp' => 'required|numeric',

        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'school' => $request->school,
            'classroom' => $request->classroom,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp

        ]);

        // Student::where('id', $id)->update($student);
        return redirect()->route('student_index')->with('status', 'Data sudah berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        // return $student;
        $student->delete();
        // Student::where('id',$id)->delete();
        return redirect()->route('student_index')->with(['status'=> 'Data sudah berhasil di hapus!']);

    }
}
