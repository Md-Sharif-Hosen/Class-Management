<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectName;
use App\Models\ProjectTask;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    //
    public function create()
    {
        //function_body

        return view('admin.project task.create', ['project_id' => 1]);
    }
    public function store(request $request)
    {
        // $data = [
        //     "row1" => [
        //         "project_id" => '',
        //         "number" => '',
        //         "phase" => '',
        //         "task" => '',
        // // .... more on
        //     ]
        //     "row2" => [
        //         "project_id" => '',
        //         "number" => '',
        //         "phase" => '',
        //         "task" => '',
        // // .... more on
        //     ]
        // ];

        ProjectTask::where('project_id', request()->project_id)->delete();
        ProjectTask::insert($request->task_row);
        // dd(request()->all());
        return request()->all();

        //function_body
        // $taskstore = new ProjectTask();
        // $taskstore->number = request()->number;
        // $taskstore->phase = request()->phase;
        // $taskstore->task = request()->task;
        // $taskstore->sub_task = request()->sub_task;
        // $taskstore->description = request()->description;
        // $taskstore->per_day_hours = request()->per_day_hours;
        // $taskstore->total_days = request()->total_days;
        // $taskstore->total_hours = request()->total_hours;
        // $taskstore->per_hours_cost = request()->per_hours_cost;
        // $taskstore->total = request()->total;
        // $taskstore->save();
        // return redirect()->route('admin.projecttask.index');
    }
    public function project_details($project_id)
    {
        //function_body
        $project = ProjectName::find($project_id);
        $projectdetails = ProjectTask::where('project_id', $project_id)->get();
        return view('admin.project task.index', compact('project', 'projectdetails', 'project_id'));
    }
}
