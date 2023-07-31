<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ParentStudent;

class StudentController extends Controller
{
    public function list()
 	{
 		$list = ParentStudent::where('parent_id', auth()->user()->id)->get();
 		return view("parent.student.list", get_defined_vars());
 	}

 	public function add()
	{
		return view("parent.student.add", get_defined_vars());
	}

	public function edit($id = null)
	{
		$student = ParentStudent::findOrFail($id);
		return view("parent.student.edit", get_defined_vars());
	}

	public function save(Request $req)
	{
		$req->validate([
			'student_name' => 'required|string',
			'student_dob' => 'required',
		]);
		if(!isset($req->id))
		{
			ParentStudent::create($req->except('_token'));
			return redirect()->route("parent.student.list")->with("success", "Student Added Successfully");
		}else
		{
			ParentStudent::where('id', $req->id)
				->update($req->except('_token', '_date'));
			return redirect()->route("parent.student.list")->with("success", "Student Updated Successfully");
		}

		
		
	}

	public function delete($id)
	{
		$operator = ParentStudent::findOrFail($id);
		$operator->delete();
		return back()->with("success", "Student Deleted Successfully");
	}
}
