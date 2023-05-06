<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class StudentsController extends Controller
{

  public function index(){
    $students=Students::all();
    return view('students.index',['students'=>$students]);
  }

public function students(){
    return view('students.adding');
}

public function store(Request $request){

    $request->validate([
    'name'=>'required|min:3|max:20', 
    'age' => 'required|integer|min:18|max:99',
    'IDno'=>'required|unique:students,IDno,{$id},id,deleted_at,null',
    'track_id'=>'required|exists:students,track_id',
  ]);
    
  Students::create($request->all());
    return redirect('students')->with('success','The Student is Added successfully');
}

public function edit(Students $id){
    return view('students.edit',['students'=> $id]);
}

public function update(Request $request, Students $id){
  $request->validate([
  'name'=>'required|min:3|max:20', 
  'IDno'=>'required',
  'age' => 'required|integer|min:18|max:99',
  'track_id'=>'required|exists:students,track_id',
]);
    // $students=Students::find($id);
    $id->name=$request->name;
    $id->IDno=$request->IDno;
    $id->age=$request->age;
    $id->track_id=$request->track_id;
   if($id->save()){
    return redirect('students')->with('success','The Student is Edited successfully');
   }
}

public function delete($id){
Students::find($id)->delete();
return redirect('students')->with('success','The Student is Deleted successfully');
}

}
