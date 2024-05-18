<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index()
  {
    $Students =  Student::get();
    //   dd($Students->count());
    //    dd($Students->first());
    //    dd($Students->last());

    return view("students", compact('Students'));
  }
  public function delete($id)
  {

    Student::find($id)->delete();
    return redirect()->route("student.index");
  }


  public function update($id)
  {
    $Student = Student::find($id);
    return view("update", compact("Student"));
  }
  public function edit($id, Request $request)
  {
    Student::find($id)
    ->update(
      [
        "name" => $request->fullName,
        "age" => $request->age
      ]
    );

    return redirect()->route("student.index");
  }


  public function createPage(){
    return view("create");
  }
  public function Create(Request $request){
    Student::create(
      [
        "name" => $request->fullName,
        "age" => $request->age
      ]
    );

    return redirect()->route("student.index");
  }


}
