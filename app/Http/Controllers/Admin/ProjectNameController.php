<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectName;
use Illuminate\Http\Request;

class ProjectNameController extends Controller
{
    //
    public function create()
    {
        //function_body
        return view('admin.project.create');
    }
    public function store(request $request)

    {
        $projectinfo = new ProjectName();
        $projectinfo->title=request()->title;
        $projectinfo->save();
        return redirect()->route('admin.project.index');
    }

    public function index()
    {
        //function_body
        $all_data=ProjectName::get();
        return view('admin.project.index',compact('all_data'));
    }
}
