<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    private $columns=['StdudentName','age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=student::get();
        return view('students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student=new Student();
        // $student->StdudentName=$request->input('StdudentName');
        // $student->age=$request->input('age');
        // $student->save();
        // return'Data Inserted successully';

        // Student::create($request->only($this->columns));
        // return redirect('Students');

        $data=$request->validate([
            'StdudentName'=>'required|max:100|min:7',
            'age' => 'required|integer|between:18,100',
        ]);
        Student::create($data);
        return redirect('addStudent');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('showStudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('id', $id)->update($request->only($this->columns));
              return redirect('Students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        {
            $id = $request->id;
            Student::where('id', $id)->delete();
    return redirect('Students');
        }
    }
    public function restore(string $id)
    {
        Student::where('id', $id)->restore();
    return redirect('Students');
    // return "Success";
    }
    public function forceDelete(Request $request)
{
    $id = $request->id;
    Student::where('id', $id)->forceDelete();
      return redirect('Students');
}
public function showDeleted()
{
$trash = Student::onlyTrashed()->get();
return view('studentsTrash', compact('trash'));
}
    

}
